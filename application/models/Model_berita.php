<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_berita
 *
 * @author tsabbitaqdami
 */
class Model_berita extends CI_Model {
    //put your code here
    public function insert_berita($pengajar)
    {
        $data = array
                (
                    'judulberita'     => $this->input->post('judulberita'),
                    'tgl'             => date('Y-m-d'),
                    'isiberita'       => $this->input->post('isiberita'),
                    'header'          => $this->input->post('header'),
                    'id_user'         => $pengajar,
                    'jenis'           => $this->input->post('jenis')
                    
                );
        $this->db->insert('kontenberita',$data);
    }
    public function edit_berita()
    {
        $data = array
                (
                    'judulberita'     => $this->input->post('judulberita'),
                    'tgl'             => date('Y-m-d'),
                    'isiberita'       => $this->input->post('isiberita'),
                    'header'          => $this->input->post('header'),
                    'id_user'         => $this->input->post('id_user'),
                    
                );
        $this->db->where('id',  $this->input->post('id'));
        $this->db->update('kontenberita',$data);
    }
    public function delete_berita($id)
    {
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('kontenberita');
    }
    public function get_one_berita($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('kontenberita',$param);
    }
    public function select_berita()
    {
    	
        return $this->db->get('kontenberita');
    }
    public function select_judul()
    {
        $sql="SELECT judulberita FROM kontenberita order by id DESC LIMIT 5";
        return $this->db->get($sql);
    }
    
}
