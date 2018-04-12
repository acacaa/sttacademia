<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_login
 *
 * @author tsabbitaqdami
 */
class Model_login extends CI_Model {
    //put your code here
    public function login($data)
    {
        $sql = $this->db->get_where('login',$data);
        return $sql->num_rows();
    }
    
    
}
