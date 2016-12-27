<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
//    public function index()
//    {
//        echo "Fungsi index";
//    }
//    function hello($nama,$npm){
//        echo "Selamat Datang $nama dan dengan npm $npm ";
//    }
}
