<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_pembayaran
 *
 * @author tsabbitaqdami
 */
class Model_pembayaran extends CI_Model {
    //put your code here
    public function insert_pembayaran($data)
    {
        $this->db->insert('pembayaran',$data);
    }
    
    public function get_one_pembayaran($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('siswa',$param);
    }
    
    
    public function select_pembayaran()
    {
        $sql = "select siswa.nama_siswa as nama, "
                . "pembayaran.tgltransaksi, "
                . "pembayaran.bukti, "
                . "pembayaran.id, "
                . "pembayaran.status "
                . "from pembayaran,siswa "
                . "where siswa.id=pembayaran.iduser "
                . "order by pembayaran.tgltransaksi DESC";
        return $this->db->query($sql);
    }
    public function kelas_aktif($iduser)
    {
        $query="select kelas.namakelas
                from kelas, detail_kelas_user, siswa
                WHERE detail_kelas_user.iduser = 
                      siswa.id and kelas.id = detail_kelas_user.idkelas 
                      and siswa.id=$iduser";
        return $this->db->query($query);
    }
    public function list_video()
    {
        $query ="select kontenvideo.judulvideo, kontenvideo.keterangan 
                 FROM kontenvideo";
        return $this->db->query($query);
    }
    public function totalsiswa()
    {
        $query="select COUNT(nama_siswa) as siswa from siswa";
        return $this->db->query($query);
    }
    public function updatesiswa($id)
    {
        return $this->db->update('siswa',array('status_aktif'=>' Aktif'), array('id'=>$id));
    }
}
