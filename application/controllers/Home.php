<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
            $user_data = $this->User_model->getMember();
            if($user_data !== null){
                $data = array(
                    'userId' => $user_data->$id,
                    'logged_in' => True
                );
                $this->session->set_userdata($data);
                redirect('home/admin');
            }
            else{
                $this->session->set_flashdata('salah','Username atau password salah');
                redirect('home');
            }
        }
        else{
            $data['Judul']='Halaman 1';
            $data['Content'] = 'home/login';
            $this->load->view('Home/Content',$data);
        }
    }
    public function daftar()
    {
        $this->form_validation->set_rules('username','Username','required|trim|min_length[5]|is_unique[member.username]');
        $this->form_validation->set_rules('email','Email','required|is_unique[member.email]|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('konfirmasi','Konfirmasi Password','required|matches[password]');
        $this->form_validation->set_rules('gender','Gender');
        $this->form_validation->set_rules('hobby[]','Hobby','required');
        if($this->form_validation->run()){
            $id = $this->User_model->insertmember();
            if($id >= 1){
                $data = array(
                    'userId' => $id,
                    'logged_in' => True
                );
                $this->session->set_userdata($data);
                redirect('Home/admin');
            } 
        }else{
            $data['Judul']='Halaman 1';
            $data['Content'] = 'home/home';
            $this->load->view('Home/Content',$data);
        }
    }
    public function admin()
    {
        if($this->session->userdata('logged_in')){
            $this->load->view('Home/Dashboard');
        }else{
            $this->session->set_flashdata('no_login','Harus login terlebih dahulu');
            redirect('home');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
        
    }
    public function login()
    {
        
    }
}