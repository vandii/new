<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class department extends CI_Controller {
     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
     }

     public function index()
     {
          //load the department_model
          $prof = $this->input->post("txt_id");
          // $prof=127;
          $this->load->model('department_model');  
          //call the model function to get the department data
          $deptresult = $this->department_model->get_department_list($prof);           
          $data['deptlist'] = $deptresult;
          //load the department_view
          $this->load->view('department_view',$data);
     }
}