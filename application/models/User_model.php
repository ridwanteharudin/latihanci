<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function insertmember()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $hobby = $this->input->post('hobby');
            $gender = $this->input->post('gender');
            $agama = $this->input->post('agama');
            $hasil="";
            foreach($hobby as $isi){
                $hasil=$hasil.$isi.',';
            }
            $data = array(
                'username' => $username, 
                'password' => $password,
                'email'    => $email,
                'agama'    => $agama,
                'hobby'    => $hasil,
                'gender'   => $gender
            );
            $this->db->insert('member',$data);
            $id = $this->db->insert_id(); 
            return $id;
        }
        public function getMember()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $query = $this->db->get_where('member', array('username' => $username, 'password' => $password));
            
            return $query->row();
        }
    }
?>