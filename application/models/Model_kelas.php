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
class Model_kelas extends CI_Model{
    //put your code here
    public function insert_kelas($data)
    {
       $this->db->insert('kelas',$data);
    }
    public function insert_detail_kelas($data)
    {
       $this->db->insert('detail_kelas_user',$data);
    }
    public function select_all_detailkelas()
    {
        $sql= " select kelas.namakelas as kelassiswa,
                siswa.nama_siswa as namasiswa
                from   detail_kelas_user,
                     kelas,
                     siswa 
                where  kelas.id=detail_kelas_user.idkelas 
                and detail_kelas_user.iduser=siswa.id 
                order by detail_kelas_user.id DESC";
        return $this->db->query($sql);
    }

    public function edit_kelas($id)
    {
        $data = array
                (
                    'status'     => 'Aktif'
                );
        $param =array('id'=>$id);
        $this->db->where($param);
        $this->db->update('kelas',$data);
    }
    public function delete_kelas($id)
    {
        //$this->db->where('id',  $this->input->post('id'));
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('kelas');
    }
    public function get_one_kontak($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('kontak',$param);
    }
    public function select_all()
    {
        $sql= "select * from kelas order by id DESC";
        return $this->db->query($sql);
    }
    public function select_kelas_pengajar($id)
    {
        $sql= "select * from kelas where iduser='$id' order by id DESC";
        return $this->db->query($sql);
    }
    
    public function totalkeluhan()
    {
        $sql="select COUNT(pertanyaan) as kontak from kontak";
        return $this->db->query($sql);
    }
}
