<?php
class Login extends MX_Controller {

    function __construct(){
        session_start();
        parent::__construct();
    }

    public function index(){
        
        if (isset($_SESSION['username'])) {
            // if logged in
            redirect('employee');
        }
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        
        if ($this->form_validation->run() !== false) {
            //then validation passed. Get values from the db
            $this->load->model('auth_model');
            $result  = $this->auth_model->verify_user($this->input->post('username'), $this->input->post('password'));
        
            if ($result !== false) {
                //person has an account
                $_SESSION['username'] = $this->input->post('username');
                redirect('employee');
            } 
        }
        
        $this->load->view('template/header');
        $this->load->view('login_view');
        $this->load->view('template/footer');
    }
    
    public function logout() {
        session_destroy();
        redirect('/');
        /*
        $this->load->view('template/header');
        $this->load->view('login_view');
        $this->load->view('template/footer');
        */
    }

}



?>