<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_kontak
 *
 * @author tsabbitaqdami
 */
class Model_kontak extends CI_Model{
    //put your code here
    public function insert_kontak($data)
    {
       $this->db->insert('kontak',$data);
    }
    public function edit_kontak($id)
    {
        $data = array
                (
                    'status'     => 'Sudah Terjawab'
                );
        $this->db->where('id',  $id);
        $this->db->update('kontak',$data);
    }
    public function delete_kontak()
    {
        $this->db->where('id',  $this->input->post('id'));
        $this->db->delete('kontak');
    }
    public function get_one_kontak($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('kontak',$param);
    }
    public function select_kontak()
    {
        $sql="Select * from kontak order by waktu DESC";
        return $this->db->get('kontak');
    }
    public function select_name($email)
    {
        $sql ="Select id,namapengajar from pengajar where email='$email'";
        return $this->db->query($sql);
    }
    public function totalkeluhan()
    {
        $sql="select COUNT(pertanyaan) as kontak from kontak";
        return $this->db->query($sql);
    }
}
