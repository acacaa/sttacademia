<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Backend
 *
 * @author tsabbitaqdami
 */
class Backend extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_berita');
        $this->load->model('Model_pelajar');
        $this->load->model('Model_kelompoksoal');
        $this->load->model('Model_pengajar');
        $this->load->model('Model_soal');
        $this->load->model('Model_video');
        $this->load->model('Model_kontak');
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
            $this->load->view('lamandepan/beranda');  
            
    }
    
    
    
}
