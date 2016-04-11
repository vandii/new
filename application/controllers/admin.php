<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller
{
	public function __construct()
    {
          parent::__construct();
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
    	$username= $this->home_model->index();
      	$a=$this->home_model->is_admin($username);
      	if((int)$a==0){
        	$this->load->view('err');}
        else
          $this->load->view('admin_view');
    }
}

?>