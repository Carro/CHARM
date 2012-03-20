<?php

class Login extends CI_Controller
{
    
    function index()
    {
        $this->load->view('login_view');     
    }
    function check()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->load->model('Login_model', '',TRUE);
        $query = $this->Login_model->check_user($username, $password);
        
        if($query->num_rows() == 1)
        {
            $this->load->view('secure_view');
        }else
        {
            $this->load->view('login_view');
        }
    }
    
    
}



?>