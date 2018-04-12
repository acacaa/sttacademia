<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_siswa
 *
 * @author tsabbitaqdami
 */
class Model_siswa extends CI_Model {
    //put your code here
    public function selectvideo()
    {
        $sql="SELECT *
              FROM kontenvideo where keterangan='Publik'";
        return $this->db->query($sql);
    }
    public function selectvideopremium()
    {
        $sql="SELECT *
              FROM kontenvideo where keterangan='Publik' or keterangan='berbayar'";
        return $this->db->query($sql);
    }
    public function insert_pembayaran($data)
    {
        $this->db->insert('pembayaran',$data);
    }
    public function insert_pertanyaan($data)
    {
        $this->db->insert('pertanyaan',$data);
    }
    public function list_pertanyaan($id)
    {
        $sql="select pertanyaan.id, 
	    pertanyaan.judulpertanyaan,
            pertanyaan.tanggal,
            pertanyaan.status,
            siswa.nama_siswa
            from   pertanyaan,siswa
            where  siswa.id=pertanyaan.idpenanya
                   and pertanyaan.idpenanya='$id'";
        return $this->db->query($sql);
    }
    public function listsoal($id)
    {
        $sql="SELECT kelompoksoal.jeniskelompok,
	   tabelsoal.idsoal,
       tabelsoal.tgl_buat,
       tabelsoal.kuncijawaban,
       tabelsoal.isisoal,
       tabelsoal.gambar,
       tabelsoal.pilihan1,
       tabelsoal.pilihan2,
       tabelsoal.pilihan3,
       tabelsoal.pilihan4,
       tabelsoal.pilihan5,
       kelas.namakelas
from   tabelsoal,
       kelompoksoal,
       kelas,
       detail_kelas_user
where tabelsoal.idkelas=kelas.id
	  and tabelsoal.idkelompok = kelompoksoal.id
      and detail_kelas_user.idkelas=tabelsoal.idkelas
      and detail_kelas_user.iduser='2'";
        return $this->db->query($sql);
    }
}
