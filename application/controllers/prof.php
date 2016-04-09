<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class prof extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->helper('html');
          $this->load->database();
          //load the login model
          $this->load->model('prof_model');
     }

     public function index()
     {
          $prof = $this->input->post("txt_id");
          $this->load->view('prof_view');


     }

     function display()
     {
     }
     function search()
     {
          $query_array=$this->input->post('iid');
          $query_id =$this->input->save($query_array);
          redirect('prof/display/$query_id');
     }
}?>