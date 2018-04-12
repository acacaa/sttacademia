<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pengajar
 *
 * @author tsabbitaqdami
 */
class Pengajar extends CI_Controller {
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
    function ruangkelas()
    {
        if($this->session->userdata('status')=='pengajar_oke')
        {
        $email = $this->session->userdata('email');
        $datas= $this->Model_pengajar->get_one_pengajar($email);
        foreach ($datas->result() as $a)
        {
            $pengajar= $a->id;
        }
        $data['result']= $this->Model_kelas->select_kelas_pengajar($pengajar);
        $this->load->view('pengajar/listkelas',$data);}
    }
    public function kelompokkelas()
    {
        if($this->session->userdata('status')=='pengajar_oke')
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
                'status'    => "Belum Aktif"
            );
            $this->Model_kelas->insert_kelas($data);
            redirect('pengajar/ruangkelas');
        }
        else
        {
        $data['result']= $this->Model_kelas->select_all();
        $this->load->view('pengajar/listkelas',$data);
        
        }
        }
    }
    public function listvideo()
    {
        if($this->session->userdata('status')=='pengajar_oke')
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
            redirect('pengajar/listvideo');
        }
        else
        {
        //$this->load->library('template');
        $data['results']= $this->Model_kelas->select_all();
        $data['result']= $this->Model_video->select_video();
        $this->load->view('pengajar/listvideo',$data);
        }
        }
    }
    public function kelompoksoal()
    {
        if($this->session->userdata('status')=='pengajar_oke')
        {
        if(isset($_POST['submit']))
        {
            $email = $this->session->userdata('email');
            $datas= $this->Model_pengajar->get_one_pengajar($email);
            foreach ($datas->result() as $a)
            {
                $pengajar= $a->id;
            }
            $data=array('jeniskelompok'=> $this->input->post('jeniskelompok'),'id_user'=>$pengajar);
            $this->Model_kelompoksoal->insert($data);
            redirect('pengajar/kelompoksoal');
        }
        else
        {
        $data['result']= $this->Model_kelompoksoal->select_all();
        $this->load->view('pengajar/listkategorisoal',$data);
        
        }}
    }
    public function listsoal()
    {
        if($this->session->userdata('status')=='pengajar_oke')
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
        $this->load->view('pengajar/listsoal',$data);
        
        }}
    }
    public function delete_kelompoksoal($id)
    {
        if($this->session->userdata('status')=='oke')
        {
        $this->Model_kelompoksoal->delete_kelompoksoal($id);
        redirect('pengajar/kelompoksoal');}
    }
    public function enrollsiswa()
    {
        if($this->session->userdata('status')=='pengajar_oke')
        {
        if(isset($_POST['submit']))
        {
            $data = array
                (
                    'idkelas'     => $this->input->post('kelas'),
                    'iduser'      => $this->input->post('namasiswa')
                );
                $this->Model_kelas->insert_detail_kelas($data);
                redirect('Pengajar/enrollsiswa');
        }
        else 
        {
            $email = $this->session->userdata('email');
            $datas= $this->Model_pengajar->get_one_pengajar($email);
            foreach ($datas->result() as $a)
            {
                $pengajar= $a->id;
            }
            $data['namasiswa']= $this->Model_pelajar->select_siswa();
            $data['kelas']    = $this->Model_kelas->select_kelas_pengajar($pengajar);
            $data['detail']   = $this->Model_kelas->select_all_detailkelas();
            $this->load->view('pengajar/enrollsiswa',$data);
        }
        }
        
    }
    public function listpertanyaan()
    {
        if($this->session->userdata('status')=='pengajar_oke')
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
            redirect('pengajar/listpertanyaan');   
        }
        else
        {
        $this->load->library('template');    
        $data['result']= $this->Model_pelajar->select_all_pertanyaan();
        $this->load->view('pengajar/listpertanyaan',$data);
        
        }
    }}
}
