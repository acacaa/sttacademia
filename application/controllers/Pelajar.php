<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pelajar
 *
 * @author tsabbitaqdami
 */
class Pelajar extends CI_Controller {
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
        $this->load->model('Model_siswa');
    }
    public function listvideo()
    {
        if($this->session->userdata('status')=='siswa_oke')
        {
        $email = $this->session->userdata('email');
            $datas= $this->Model_pelajar->get_one_siswa_email($email);
            foreach ($datas->result() as $a)
            {
                $siswa= $a->id;
            }
           $data['video'] = $this->Model_siswa->selectvideo();
           $this->load->view('pelajar/listvideo',$data); 
        }
    }
    public function upgrade()
    {
        if($this->session->userdata('status')=='siswa_oke')
        {
        if(isset($_POST['submit']))
        {
            $email = $this->session->userdata('email');
            $datas= $this->Model_pelajar->get_one_siswa_email($email);
            foreach ($datas->result() as $a)
                {
                    $siswa= $a->id;
                }
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 1000000;
            $config['max_height']           = 1000000;
            $this->load->library('upload', $config);
            
            //$foto          = $this->input->post('foto');
            if(!$this->upload->do_upload('bukti'))
            {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
            
            else{
                $sa = $this->upload->data('file_name');
                $data = array
                (
                    'iduser'        => $siswa,
                    'bukti'         => $sa,
                    'tgltransaksi'  => $this->input->post('tgltransaksi'),
                    'status'        => "Sudah Bayar dan Tunggu Konfirmasi"
                    
                );
                $this->Model_siswa->insert_pembayaran($data);
                redirect('Pelajar/listvideo');
                //var_dump($data);
            }
        }
        else
        {
            $this->load->view('pelajar/upgrade');
        }}
    }
    public function listvideopremium()
    {
        if($this->session->userdata('status')=='siswa_oke_premium')
        {
        $data['video'] = $this->Model_siswa->selectvideopremium();
        $this->load->view('pelajar/listvideopremium',$data);
        }
    }
    public function siswabertanya()
    {
        if($this->session->userdata('status')=='siswa_oke_premium')
        {
        if(isset($_POST['submit']))
        {
            $email = $this->session->userdata('email');
            $datas= $this->Model_pelajar->get_one_siswa_email($email);
            foreach ($datas->result() as $a)
                {
                    $siswa= $a->id;
                }
            $data = array(
                'judulpertanyaan' => $this->input->post('judulpertanyaan'),
                'isipertanyaan'   => $this->input->post('isipertanyaan'),
                'tanggal'         => date('Y-m-d'),
                'idpenanya'       => $siswa,
                'status'          => 'Belum Terjawab'
            );
            $this->Model_siswa->insert_pertanyaan($data);
            redirect('pelajar/siswabertanya');
        }
        else
        {
        $email = $this->session->userdata('email');
            $datas= $this->Model_pelajar->get_one_siswa_email($email);
            foreach ($datas->result() as $a)
                {
                    $siswa= $a->id;
                }
        $data['result']= $this->Model_siswa->list_pertanyaan($siswa);
        $this->load->view('pelajar/listpertanyaan',$data);
        }}
        
    }
    public function banksoal()
    {
        if($this->session->userdata('status')=='siswa_oke_premium')
        {
        $email = $this->session->userdata('email');
        $datas= $this->Model_pelajar->get_one_siswa_email($email);
        foreach ($datas->result() as $a)
            {
                $siswa= $a->id;
            }
        $data['result']= $this->Model_siswa->listsoal($siswa);
        $this->load->view('pelajar/listsoal',$data);
    }
    }
    
}
