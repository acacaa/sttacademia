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
class Model_pengajar extends CI_Model {
    //put your code here
    public function login($data)
    {
        $sql = $this->db->get_where('pengajar',$data);
        return $sql->num_rows();
    }
    public function insert_pengajar()
    {
       $data = array(
                    'namapengajar'       => $this->input->post('namapengajar'),
                    'alamat'             => $this->input->post('alamat'),
                    'latarbelakang'      => $this->input->post('latarbelakang'),
                    'password'           => $this->input->post('password'),
                    'status'             => "Aktif",
                    'tgl_lahir'          => $this->input->post('tgl_lahir'),
                    'namaayah'           => $this->input->post('namaayah'),
                    'nohp'               => $this->input->post('nohp'),
                    'email'              => $this->input->post('email'),
                    'keterangan'         => "Guru",
                    'jeniskelamin'       => $this->input->post('jeniskelamin')
       ); 
        $this->db->insert('pengajar',$data);
    }
    public function edit_pengajar()
    {
        $data = array
                (                    
                    'namapengajar'       => $this->input->post('namapengajar'),
                    'alamat'             => $this->input->post('alamat'),
                    'latarbelakang'      => $this->input->post('latarbelakang'),
                    'status'             => $this->input->post('status'),
                    'tgl_lahir'          => $this->input->post('tgl_lahir'),
                    'namaayah'           => $this->input->post('namaayah'),
                    'nohp'               => $this->input->post('nohp'),
                    'email'              => $this->input->post('email'),
                    'keterangan'         => $this->input->post('keterangan')
                );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pengajar',$data);
    }
    public function delete_pengajar($id)
    {
        //$this->db->where('id',  $this->input->post('id'));
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('pengajar');
    }
    public function get_one_pengajar($email)
    {
        $param  =   array('email'=>$email);
        return $this->db->get_where('pengajar',$param);
    }
    public function select_all()
    {
        $sql="select * from pengajar order by id DESC";
        return $this->db->query($sql);
    }
    public function select_name($email)
    {
        $sql ="Select id,namapengajar from pengajar where email='$email'";
        return $this->db->sql($sql);
    }
    public function totalpengajar()
    {
        $sql= "select COUNT(namapengajar) as pengajar from pengajar";
        return $this->db->query($sql);
    }
    public function listkelasnya($email)
    {
        $sql="select kelas.namakelas, kelas.jenjang, kelas.status, pengajar.namapengajar
                from kelas, pengajar
                WHERE kelas.iduser = pengajar.id and pengajar.email='$email'";
        return $this->db->query($sql);
    }
}
