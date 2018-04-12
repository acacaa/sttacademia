<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author tsabbitaqdami
 */
class Admin extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_pelajar');
        $this->load->model('Model_kelompoksoal');
        $this->load->model('Model_pengajar');
        $this->load->model('Model_soal');
        $this->load->model('Model_video');
        $this->load->model('Model_kontak');
        $this->load->model('Model_pembayaran');
        $this->load->model('Model_kelas');
    }
    public function pengajar()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            $this->Model_pengajar->insert_pengajar();
            redirect('Admin/pengajar');
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_pengajar->select_all();
        $this->load->view('superroot/listguru',$data);
        
        }
        }
    }
    public function detail_pengajar($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $data=$this->Model_pengajar->get_one_pengajar($id);
        $data = $data->result_array();
        //echo '<pre>';var_dump($data);echo '</pre>';
        echo json_encode($data);
        }
    }
    public function detail_video($id)
    {
        $data=$this->Model_video->get_one_video($id);
        $data = $data->result_array();
        //echo '<pre>';var_dump($data);echo '</pre>';
        echo json_encode($data);
        //var_dump($data);
        //$this->load->view('superroot/detailguru',$data);
    }
    public function detail_pertanyaan($id)
    {
        $data=$this->Model_pelajar->get_one_pertanyaan($id);
        $data = $data->result_array();
        //echo '<pre>';var_dump($data);echo '</pre>';
        echo json_encode($data);
        //var_dump($data);
        //$this->load->view('superroot/detailguru',$data);
    }
    public function detail_kontak($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $data=$this->Model_kontak->get_one_kontak($id);
        $data = $data->result_array();
        //echo '<pre>';var_dump($data);echo '</pre>';
        echo json_encode($data);
        }

    }
    public function detail_soal($id)
    {
       $data=$this->Model_soal->get_one_soal($id);
        $data = $data->result_array();
        echo json_encode($data);
       

    }
    public function delete_pengajar($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_pengajar->delete_pengajar($id);
        redirect('Admin/pengajar');
        }
    }
    public function delete_siswa($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_pelajar->delete_siswa($id);
        redirect('Admin/siswa');
        }
    }
    public function aktivasi_siswa($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_pelajar->aktivasi_siswa($id);
        redirect('Admin/siswa');
        }
    }
    public function edit_kelas($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_kelas->edit_kelas($id);
        redirect('Admin/kelompokkelas');
        }
    }
    public function edit_kontak($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_kontak->edit_kontak($id);
        redirect('Admin/listkontak');
        }
    }
    public function update_pertanyaan()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            $datas= $this->session->userdata('email');
            foreach ($datas->result() as $a)
            {
                $pengajar= $a->id;
            }
            $this->Model_pelajar->edit_pertanyaan($pengajar);
            redirect('Admin/listpertanyaan');
            
        }
        }
        
    }
    public function delete_kelas($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_kelas->delete_kelas($id);
        redirect('Admin/kelompokkelas');
        }
    }
    public function delete_video($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_video->deletevideo($id);
        redirect('Admin/listvideo');
        }
    }
    public function delete_kelompoksoal($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_kelompoksoal->delete_kelompoksoal($id);
        redirect('Admin/kelompoksoal');
        }
    }
    public function delete_pertanyaan($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_pelajar->delete_pertanyaan($id);
        redirect('Admin/listpertanyaan');
        }
    }

    public function siswa()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_pelajar->select_siswa();
        $this->load->view('superroot/listsiswa',$data);
        }
        
        }
    }
    public function pembayaran()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_pembayaran->select_pembayaran();
        $this->load->view('superroot/listpembayaran',$data);
        
        }}
    }
    public function kategorivideo()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_pengajar->select_all();
        $this->load->view('superroot/listguru',$data);
        
        }}
    }
    public function listvideo()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            $email = $this->session->userdata('email');
            $datas= $this->Model_pengajar->get_one_pengajar($email);
            foreach ($datas->result() as $a)
            {
                $pengajar= $a->id;
            }
            $this->Model_video->insert_video($pengajar);
            redirect('Admin/listvideo');
        }
        else
        {
        //$this->load->library('template');
        $data['results']= $this->Model_kelas->select_all();
        $data['result']= $this->Model_video->select_video();
        $this->load->view('superroot/listvideo',$data);
        
        }}
    }
    public function kelompoksoal()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {$email = $this->session->userdata('email');
            $datas= $this->Model_pengajar->get_one_pengajar($email);
            foreach ($datas->result() as $a)
            {
                $pengajar= $a->id;
            }
            $data=array('jeniskelompok'=> $this->input->post('jeniskelompok'),'id_user'=>$pengajar);
            $this->Model_kelompoksoal->insert($data);
            redirect('Admin/kelompoksoal');
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_kelompoksoal->select_all();
        $this->load->view('superroot/listkategorisoal',$data);
        
        }}
    }
    public function listsoal()
    {if($this->session->userdata('status')=='oke')
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
            if(!$this->upload->do_upload('gambar'))
            {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
            
            else{
                $sa = $this->upload->data('file_name');
            $data = array
                (
                    'idkelas'         => $this->input->post('idkelas'),
                    'idkelompok'      => $this->input->post('idkelompok'),
                    'tgl_buat'        => date('Y-m-d'),
                    'isisoal'         => $this->input->post('isisoal'),
                    'pilihan1'        => $this->input->post('pilihan1'),
                    'pilihan2'        => $this->input->post('pilihan2'),
                    'pilihan3'        => $this->input->post('pilihan3'),
                    'pilihan4'        => $this->input->post('pilihan4'),
                    'pilihan5'        => $this->input->post('pilihan5'),
                    'kuncijawaban'    => $this->input->post('kuncijawaban'),
                    'gambar'          => $sa,
                    'aktif'           => "aktif"
                    
                );
                $this->Model_soal->insert_soal($data);
                redirect('Admin/listsoal');
            }
        }
        else
        {
        $this->load->library('template'); 
        $data['kelas'] = $this->Model_kelas->select_all();
        $data['kelompoksoal'] = $this->Model_kelompoksoal->select_all();
        $data['result']= $this->Model_soal->select_all();
        $this->load->view('superroot/listsoal',$data);
        
        }}
    }
    public function kelompokkelas()
    {if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            $email = $this->session->userdata('email');
            $datas= $this->Model_pengajar->get_one_pengajar($email);
            foreach ($datas->result() as $a)
            {
                $pengajar= $a->id;
            }
            $data=array(
                'namakelas'=> $this->input->post('namakelas'),
                'jenjang'   => $this->input->post('jenjang'),
                'iduser'    => $pengajar,
                'status'    => "aktif"
            );
            $this->Model_kelas->insert_kelas($data);
            redirect('Admin/kelompokkelas');
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_kelas->select_all();
        $this->load->view('superroot/listkelas',$data);
        
        }}
    }
    public function ruangkelas()
    {if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_kelas->select_all();
        $this->load->view('superroot/listkelas',$data);
        
        }}
    }
    public function listkontak()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_kontak->select_kontak();
        $this->load->view('superroot/listkontak',$data);
        
        }}
    }
    public function listpertanyaan()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            $email= $this->session->userdata('email');
            $id = $this->input->post('detailku_id');
            $datas= $this->Model_pengajar->get_one_pengajar($email);
            foreach ($datas->result() as $a)
            {
                $pengajar= $a->id;
            }
            $this->Model_pelajar->edit_pertanyaan($pengajar,$id);
            redirect('Admin/listpertanyaan');   
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_pelajar->select_all_pertanyaan();
        $this->load->view('superroot/listpertanyaan',$data);
        
        }}
    }
    public function tambahguru()
    {
        if($this->session->userdata('status')=='oke')
        {
        if(isset($_POST['submit']))
        {
            
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_pengajar->select_all();
        $this->load->view('superroot/listguru',$data);
        
        }}
    }
    public function konfirm_bayar($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_pelajar->konfirmasi_siswa($id);
        redirect('Admin/pembayaran');
        }
    }
    
}
