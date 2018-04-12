<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Siswa_model');
        $this->load->model('Pengajar_model');
        $this->load->model('Kontak_model');
        $this->load->model('Video_model');
    }
	public function index()
	{
		$this->load->view('lamanawal');
	}
	public function event()
	{
		$this->load->view('welcome_message');
	}
	public function berita()
	{
		if(isset($_POST['submit']))
		{
			$this->Berita_model->insert_berita();
			$this->load->view('user/template1',array('contents' => 'user/inputberita', 'view_data' => null));	
		}
		else
		{
                    $data['video'] = $this->Video_model->select_video();
                    $data['berita']= $this->Berita_model->select_berita_berita();
                    $data['jokes'] = $this->Berita_model->select_berita_jokes();
                    $data['olimpiade'] = $this->Berita_model->select_berita_olimpiade();
                    $this->load->view('lamanberita',$data);
		}
		
	}
	public function login()
	{
            if(isset($_POST['submit']))
            {
                $data = array(
                            'email'=> $this->input->post('email'),
                            'password'=> $this->input->post('password')
                        );
                $email = $this->input->post('email');
                $cekadmin = $this->Pengajar_model->login($data);
                $ceksiswa= $this->Siswa_model->login($data);
                if($cekadmin==1 && $ceksiswa==0)
                {
                    if($email=='ahmad')
                    {
                        $this->session->set_userdata(array('status'=>'oke','email'=>$email));
                        redirect('backend');
                    }
                    else
                    {
                        $this->session->set_userdata(array('status'=>'pengajar_oke','email'=>$email));
                    redirect('backend/indexpengajar');
                        
                    }
                    
                    
                }
                else if ($ceksiswa==1 && $cekadmin==0)
                {
                        $data = array(
                            'email'=> $this->input->post('email'),
                            'password'=> $this->input->post('password'),
                            'status_aktif'=> '1'
                        );
                    $ceksiswa2= $this->Siswa_model->login($data);
                        if($ceksiswa2==1)
                        {
                            $this->session->set_userdata(array('status'=>'siswa_oke','email'=>$email));
                            $this->load->view('siswa/siswaadmin');
                            
                        }
                        $this->load->view('lamanaktivasi');
                }
                else
                {
                	$this->load->view('logingagal');
                }
                
            }
		else
		{
                    $this->load->view('login');
		}

	}
	public function tentang()
	{
            $this->load->view('lamantentang');
	}
        public function kontak()
        {
            if(isset($_POST['submit']))
		{
			$this->Kontak_model->insert_kontak();
                        $this->load->view('kontakoke');
		}
		else
		{
                    $this->load->view('lamankontak');
		}
            
        }
        public function logout()
        {
           $user_data = $this->session->all_userdata();
           foreach ($user_data as $key => $value) {
            if ($key != 'status' && $key != 'email') 
            {
                $this->session->unset_userdata($key);
            }
        }
            $this->session->sess_destroy();
            redirect('welcome/berita');  
            
        }
        public function daftar()
        {
            if(isset($_POST['submit']))
            {
                $data = array(
                            'email'=> $this->input->post('email')
                        );
                $ceksiswa= $this->Siswa_model->login($data);
                if($ceksiswa==1)
                {
                    $this->load->view('registergagal');
                }
                else
                {
                    $this->Siswa_model->insert_siswa();
                    redirect('welcome/berita');
                }
            }
        
        }
        public function tampil($id)
        {
            
                $data['record'] = $this->Video_model->get_one_video($id);
                $this->load->view('lamantampilvideo',$data);
            
            
        }
        public function tampilberita($id)
        {
            
            $data['record']= $this->Berita_model->get_one_berita($id);
            $this->load->view('tampilberita',$data);
            
        }
}
