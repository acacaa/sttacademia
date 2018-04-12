<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Frontend
 *
 * @author tsabbitaqdami
 */
class Frontend extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_berita');
        $this->load->model('Model_pelajar');

        $this->load->model('Model_pengajar');
        $this->load->model('Model_soal');
        $this->load->model('Model_video');
        $this->load->model('Model_kontak');
    }
    public function beranda()
    {
        $this->load->view('lamandepan/beranda');
        
    }
    public function kontak()
    {
        if(isset($_POST['submit']))
        {
            $data = array(
                    'nama'       => $this->input->post('nama'),
                    'kota'       => $this->input->post('kota'),
                    'email'      => $this->input->post('email'),
                    'pertanyaan' => $this->input->post('pertanyaan'),
                    'waktu'      => date('Y-m-d'),
                    'status'     => 'Belum Terjawab'
            );
            $this->Model_kontak->insert_kontak($data);
            redirect('frontend/responkontak');
            
        }
        else
        {
            $this->load->view('lamandepan/kontak');
        }
        
        
    }
    public function berita()
    {
        header("Location: http://blog.sttacademia.com"); /* Redirect browser */
     exit();
    }
    public function logout()
    {
           $user_data = $this->session->all_userdata();
           foreach ($user_data as $key => $value) {
            if ($key != 'status' && $key != 'nama') 
            {
                $this->session->unset_userdata($key);
            }
        }
            $this->session->sess_destroy();
            redirect('backend/login');  
            
    }
    public function backend()
    {
        if(isset($_POST['submit']))
            {
                $data = array(
                            'email'=> $this->input->post('email'),
                            'password'=> $this->input->post('password')
                        );
                $email = $this->input->post('email');
                $cekadmin = $this->Model_pengajar->login($data);
                $ceksiswa= $this->Model_pelajar->login($data);
                if($cekadmin==1 && $ceksiswa==0)
                {
                    if($email=='escifion@gmail.com')
                    {
                        $this->session->set_userdata(array('status'=>'oke','email'=>$email));
                        $this->load->view('superroot/dashboardadmin');
                    }
                    else
                    {
                        $this->session->set_userdata(array('status'=>'pengajar_oke','email'=>$email));
                    redirect('pengajar/ruangkelas');
                        
                    }
                    
                    
                }
                else if ($ceksiswa==1 && $cekadmin==0)
                {
                        $data = array(
                            'email'=> $this->input->post('email'),
                            'password'=> $this->input->post('password'),
                            'status_aktif'=> 'Aktif ( Akun Gratis )'
                        );
                    $ceksiswa2= $this->Model_pelajar->login($data);
                        if($ceksiswa2==1)
                        {
                            $this->session->set_userdata(array('status'=>'siswa_oke','email'=>$email));
                            redirect('pelajar/listvideo');
                            
                        }
                        else
                        {
                            $this->session->set_userdata(array('status'=>'siswa_oke_premium','email'=>$email));
                            redirect('pelajar/listvideopremium');
                            
                        }
                        //$this->load->view('lamanaktivasi');
                }
                
                else
                {
                	$this->load->view('lamanadmin/lamanlogin');
                }
                
            }
		else
		{
                    $this->load->view('lamanadmin/lamanlogin');
		}
        
    }
    
    public function register()
    {
        if(isset($_POST['submit']))
        {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 1000000;
            $config['max_height']           = 1000000;
            $this->load->library('upload', $config);
            
            //$foto          = $this->input->post('foto');
            if(!$this->upload->do_upload('foto'))
            {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
            else
            {
                $sa = $this->upload->data('file_name');
                $datasa = array
                (
                    'nama_siswa'         => $this->input->post('nama_siswa'),
                    'alamat'             => $this->input->post('alamat'),
                    'tgl_lahir'          => $this->input->post('tgl_lahir'),
                    'asal_sekolah'       => $this->input->post('asal_sekolah'),
                    'nama_ortu'          => $this->input->post('nama_ortu'),
                    'jurusan'            => $this->input->post('jurusan'),
                    'password'           => $this->input->post('password'),
                    'status_aktif'       => 'Belum Aktif',
                    'notelpon'           => $this->input->post('notelpon'),
                    'email'              => $this->input->post('email'),
                    'keterangan_siswa'   => 'Gratis',
                    'jeniskelamin'       => $this->input->post('jeniskelamin'),
                    'foto'               => $sa
                    
                );
            $this->Model_pelajar->insert_siswa($datasa);
            //print_r($data);
            redirect('frontend/responregister');
            }
            

    }
        else
        {
            
            $this->load->view('lamandepan/registersiswa');
        }
        
    }
    public function delete_posting($id)
    {
        $this->Model_guide->delete_posting($id);
        redirect('frontend/akses');
            
    }
    public function konfirmasi($id)
    {
        $this->Model_guide->update_pesanan($id);
        redirect('frontend/akses');
            
    }
    public function akses()
    {
        $datas['result']= $this->Model_guide->select_all();
        $this->load->view('lamanadmin/tambahuser',$datas);
    }
    public function responregister()
    {
        $this->load->view('lamandepan/responregister');
    }
    public function responkontak()
    {
        $this->load->view('lamandepan/responkontak');
    }
    public function tentang()
    {
        if(isset($_POST['submit']))
        {
            $data = array(
                    'nama'       => $this->input->post('nama'),
                    'kota'       => $this->input->post('kota'),
                    'email'      => $this->input->post('email'),
                    'pertanyaan' => $this->input->post('pertanyaan'),
                    'waktu'      => date('Y-m-d'),
                    'status'     => 'Belum Terjawab'
            );
            $this->Model_kontak->insert_kontak($data);
            redirect('frontend/responkontak');
            
        }
        else
        {
            $this->load->view('lamandepan/tentang');
        }
    }
    
    
}
