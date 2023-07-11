<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {


    // Login input Checking
    public function login_check($user, $password)
    {
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->where('user', $user);
        $this->db->where('password', $password);
        $query = $this->db->get();
    
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    
    

}