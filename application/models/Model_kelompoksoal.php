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
class Model_kelompoksoal extends CI_Model{
    //put your code here
    public function insert($data)
    {
       $this->db->insert('kelompoksoal',$data);
    }
    public function edit_kontak()
    {
        $data = array
                (
                    'nama'       => $this->input->post('nama')
                );
        $this->db->where('id',  $this->input->post('id'));
        $this->db->update('kontak',$data);
    }
    public function delete_kelompoksoal($id)
    {
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('kelompoksoal');
    }
    public function get_one_kontak($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('kontak',$param);
    }
    public function select_all()
    {
        return $this->db->get('kelompoksoal');
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
