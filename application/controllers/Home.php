<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('login_view');
    }

    public function Register()
    {
        $this->load->view('register_view2'); 
    }

    public function Login()
    {
        $this->load->view('login_view');
    }

    public function dashboard()
    {
        $this->load->view('user_view2');
    }

}

/* End of file Home.php */


?>