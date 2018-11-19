<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get($user_id) {
        if (isInt($user_id)) {
            $this->db->where('user_id', $user_id);
            $query = $this->db->get('users');
            return $query->row();
        }
        return FALSE;
    }

    public function getAll() {
        $query = $this->db->get('users');
        return $query->result();
    }
   
    public function delete($user_id) {
        if (isInt($user_id)) {
            $this->db->where('user_id', $user_id);
            return $this->db->delete('users');
        }
        return FALSE;
    }

    public function doLogin($email, $password) {
        $this->db->where('email', $email)
                 ->where('password', md5($password . $this->config->item('encryption_keyname')));
        
        $query = $this->db->get('users');
        return ($query->num_rows() == 1)? $query->row() : FALSE;
    }

    public function setLastLogin($user_id) {
        $dados = array(
            'last_ip' => $_SERVER['REMOTE_ADDR'],
            'last_login' => time()
        );

        $this->db->where('user_id', $user_id)
                 ->update('users', $dados);
    }
}