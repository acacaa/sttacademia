<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_pengajar
 *
 * @author tsabbitaqdami
 */
class Model_video extends CI_Model {
    //put your code here
    public function insert_video($pengajar)
    {
        $data = array
                (
                    'judulvideo'     => $this->input->post('judulvideo'),
                    'url'            => $this->input->post('url'),
                    'teksvideo'      => $this->input->post('teksvideo'),
                    'keterangan'     => $this->input->post('keterangan'),
                    'tgl'            => date('Y-m-d'),
                    'mapel'          => $this->input->post('namakelas'),
                    'kelas'          => $this->input->post('namakelas'),
                    'iduser'         => $pengajar
                    
                );
        $this->db->insert('kontenvideo',$data);
    }
    public function edit_video()
    {
        $data = array
                (
                    'judulvideo'     => $this->input->post('judulvideo'),
                    'url'            => $this->input->post('url'),
                    'akseskonten'    => $this->input->post('akseskonten'),
                    'keterangan'     => $this->input->post('keterangan'),
                    'teksvideo'      => $this->input->post('teksvideo'),
                    'id_user'        => $this->input->post('id_user')
                    
                );
        $this->db->where('id',  $this->input->post('id'));
        $this->db->update('kontenvideo',$data);
    }
    public function deletevideo($id)
    {
        //$this->db->where('id',  $this->input->post('id'));
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('kontenvideo');
    
    }
    public function get_one_video($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('kontenvideo',$param);
    }
    public function select_video()
    {
        $sql="select* from kontenvideo order by id DESC";
        return $this->db->query($sql);
    }
    public function totalvideo()
    {
        $query="select count(url) as video from kontenvideo";
        return $this->db->query($query);
    }
}
