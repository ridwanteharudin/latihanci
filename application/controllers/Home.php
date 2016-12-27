<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $data['Judul']='Halaman 1';
        $data['Content'] = 'home/home';
        $this->load->view('Home/Content',$data);
    }
    public function daftar()
    {
        $this->form_validation->set_rules('username','Username','required|trim|min_length[5]|is_unique[member.username]');
        $this->form_validation->set_rules('email','Email','required|is_unique[member.email]|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('konfirmasi','Konfirmasi Password','required|matches[password]');
        
        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            
            echo $username;
            echo $password;
            echo $email;
            
        }else{
             $data['Judul']='Halaman 1';
        $data['Content'] = 'home/home';
        $this->load->view('Home/Content',$data);
        }
    }
}