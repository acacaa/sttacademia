<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_pelajar extends CI_Model
{
    public function login($data)
    {
        $sql = $this->db->get_where('siswa',$data);
        return $sql->num_rows();
    }
    public function insert_siswa($data)
    {
        $this->db->insert('siswa',$data);
    }
    public function edit_siswa()
    {
        $data = array
                (
                    'nama_siswa'         => $this->input->post('nama_siswa'),
                    'alamat'             => $this->input->post('alamat'),
                    'tgl_lahir'          => $this->input->post('konten'),
                    'asal_sekolah'       => $this->input->post('tempat'),
                    'nama_ayah'          => $this->input->post('sumber'),
                    'jurusan'            => $this->input->post('nama_ortu'),
                    'password'           => $this->input->post('password'),
                    'notelpon'           => $this->input->post('notelpon'),
                    'email'              => $this->input->post('email'),
                    'keterangansiswa'    => $this->input->post('keterangan_siswa')
                );
        $this->db->where('id',  $this->input->post('id'));
        $this->db->update('siswa',$data);
    }
    public function aktivasi_siswa($id)
    {
        $data = array
                (
                    'status_aktif'       => "Aktif ( Akun Gratis )",
                    
                );
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->update('siswa',$data);
    }
    public function konfirmasi_siswa($id)
    {
        
       
       $sql="UPDATE siswa, pembayaran
             SET pembayaran.status ='Sudah Bayar dan Konfirmasi', 
                 siswa.status_aktif='Aktif (Akun Premium)'
             WHERE pembayaran.iduser=siswa.id and pembayaran.id=$id;";
       $this->db->query($sql);
    }
    public function edit_pertanyaan($id,$ids)
    {
        $data = array
                (
                    'jawaban'            => $this->input->post('detailku_jawaban'),
                    'idjawab'            => $id,
                    'status'             => "Sudah Terjawab"
                );
        $this->db->where('id',  $ids);
        $this->db->update('pertanyaan',$data);
    }
    public function delete_siswa($id)
    {
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('siswa');
    }
    public function delete_pertanyaan($id)
    {
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('pertanyaan');
    }
    public function get_one_siswa($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('siswa',$param);
    }
    public function get_one_pertanyaan($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('pertanyaan',$param);
    }
    public function get_one_siswa_email($email)
    {
        $param  =   array('email'=>$email);
        return $this->db->get_where('siswa',$param);
    }
    
    public function select_siswa()
    {
        return $this->db->get('siswa');
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
    public function updatesiswaoffline($id)
    {
        return $this->db->update('siswa',array('status_aktif'=>' Aktif dan Offline','keterangan_siswa'=>'Offline Berbayar'), array('id'=>$id));
    }
    public function updatesiswaonline($id)
    {
        return $this->db->update('siswa',array('status_aktif'=>' Aktif dan Online','keterangan_siswa'=>'Online Berbayar'), array('id'=>$id));
    }
    public function select_all_pertanyaan()
    {
        $sql = "select * from pertanyaan order by id DESC";
        return $this->db->query($sql);
    }
    public function select_pembayaran()
    {
        $sql = "select siswa.nama_siswa as nama"
                . "pembayaran.id as id, "
                . "pembayaran.tgltransaksi, "
                . "pembayaran.bukti, "
                . "pembayaran.status "
                . "from pembayaran,siswa "
                . "where siswa.id=pembayaran.iduser "
                . "order by pembayaran.tgltransaksi DESC";
        return $this->db->query($sql);
    }
    
}
