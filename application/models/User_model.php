<?php

class User_model extends CI_Model{
    public function register($enc_password){
        //User data array
        $data = array(
            'name' => $this->input->post('name'),
            'zipcode' => $this->input->post('zipcode'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password
        );

        //Insert user
        return $this->db->insert('users', $data);
    }
}