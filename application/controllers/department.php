<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class department extends CI_Controller {
     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');

        $this->load->model('home_model');
     }

     public function index()
     {
          $this->load->view('logout');
          //load the department_model
          $prof = $this->input->post("txt_id");
       //   $prof='SAM';
          $this->load->model('department_model');  
          //call the model function to get the department data
          $username= $this->home_model->index();
          $a=$this->home_model->is_admin($username);
         $data['admin']=$this->home_model->is_admin($username);
          $deptresult = $this->department_model->get_department_list($prof);           
          $data['deptlist'] = $deptresult;
          //load the department_view
          $this->load->view('department_view1',$data);
          $this->load->view('footer');

     }
}