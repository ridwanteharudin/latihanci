<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model{
        public function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        }
    }
?>