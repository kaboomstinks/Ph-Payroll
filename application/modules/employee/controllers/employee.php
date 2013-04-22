<?php

class Employee extends CI_Controller {


  public function __construct(){
    session_start();
    parent::__construct();
    
    if(!isset($_SESSION['username'])){
      redirect('/');
    }
  }
    

  public function index(){
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
    
    $this->load->view('template/header');
    $this->load->view('employeeform_view');
    $this->load->view('template/footer');
    
  }

}

?>