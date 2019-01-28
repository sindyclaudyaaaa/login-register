<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function registerUser()
    {
        $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
        $this->form_validation->set_rules('fname','Full name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('contact','Contact','required');
        $this->form_validation->set_rules('nis','NIS','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('cpassword','Confirm password','required|matches[password]'); //apakah password matches(cocok) dengan passwor yang di db

        
        if ($this->form_validation->run() == TRUE) 
        {
            //load model to connect to the db
            $this->load->model('model_user');
            $this->model_user->insertUser();
            
            $this->session->set_flashdata('success', 'you are registered');
            redirect('Home/Login');
        } 
        else 
        {
            $this->load->view('register_view');
            
        }
        
        //harus diisi, gak ada yang sama, tabel.nama kolom
    }

}

/* End of file Register.php */

?>