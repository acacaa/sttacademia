<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_soal
 *
 * @author tsabbitaqdami
 */
class Model_soal extends CI_Model {
    //put your code here
    public function insert_soal($data)
    {
        
        $this->db->insert('tabelsoal',$data);
    }
    public function edit_soal()
    {
        $data = array
                (
                    'idkelas'         => $this->input->post('idkelas'),
                    'idkelompok'      => $this->input->post('idkelompok'),
                    'tgl_buat'        => $this->input->post('tgl_buat'),
                    'isisoal'         => $this->input->post('isisoal'),
                    'pilihan1'        => $this->input->post('pilihan1'),
                    'pilihan2'        => $this->input->post('pilihan2'),
                    'pilihan3'        => $this->input->post('pilihan3'),
                    'pilihan4'        => $this->input->post('pilihan4'),
                    'pilihan5'        => $this->input->post('pilihan5'),
                    'kuncijawaban'    => $this->input->post('kunci_jawaban'),
                    'gambar'          => $this->input->post('gambar'),
                    'aktif'           => '1'
                    
                );
        $this->db->where('id',  $this->input->post('id'));
        $this->db->update('tabelsoal',$data);
    }
    public function delete_soal($id)
    {
        $param = array('id'=>$id);
        $this->db->where($param);
        $this->db->delete('tabelsoal');;
    }
    public function get_one_soal($id)
    {
        $sql="select kelas.namakelas as namakelas,
	   kelompoksoal.jeniskelompok as jeniskelompok,
       tabelsoal.tgl_buat,
       tabelsoal.isisoal,
       tabelsoal.pilihan1,
       tabelsoal.pilihan2,
       tabelsoal.pilihan3,
       tabelsoal.pilihan4,
       tabelsoal.pilihan5,
       tabelsoal.kuncijawaban
from   kelas,kelompoksoal,tabelsoal
where  tabelsoal.idkelas = kelas.id
	   AND tabelsoal.idkelompok= kelompoksoal.id
       AND tabelsoal.idsoal ='$id'";
        return $this->db->query($sql);
    }
    public function select_all()
    {
        $sql ="SELECT tabelsoal.idsoal,
                      kelompoksoal.jeniskelompok AS kelompoksoal,
                      kelas.namakelas as namakelas,
                      tabelsoal.isisoal as isisoal
                FROM  tabelsoal,kelompoksoal,kelas
                where tabelsoal.idkelompok = kelompoksoal.id and 
                      tabelsoal.idkelas = kelas.id 
                      order by idsoal DESC";
        return $this->db->query($sql);
    }
}
