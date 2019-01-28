<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUser()
    {
        $this->load->model('model_user');
        $query = $this->model_user->checkLogin();
        $username = $query[0]->username;
        
        $listSession = array('username' => $username);
        
        $this->session->set_userdata($listSession);
        
        $this->session->set_flashdata('success', 'you are logged in');
        redirect('Home/dashboard');

    }

    public function logoutUser()
    {
        // unset($S_SESSION);
        
        $this->session->sess_destroy();
        
        redirect('Home/index');
    }
}
/* End of file Login.php */

?>
