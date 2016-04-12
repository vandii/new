<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class home extends CI_Controller
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
        $data['username'] =$username;
        $username= $this->home_model->index();
         $a=$this->home_model->is_admin($username);
         $data['admin']=$a;
        $this->load->view('logout');
        $data['details']=$this->home_model->get_details();
     //   echo $data['posts'];
        $this->load->view('home_view',$data);
  
       // echo "blah";
//        echo $username;
    }
    function current()
    {   

        $username= $this->home_model->index();
         $data['username'] =$username;
                $this->load->view('logout');

        //$this->load->view('home_view',$data);
        $data['course']=$this->home_model->current_courses($username);
        $data['credit']= $this->home_model->tot_credits($username);
        $this->load->view('courses',$data);

    }
    function grade_sheet()
    {
      $username= $this->home_model->index();
         $data['username'] =$username;
                $this->load->view('logout');
      //  $this->load->view('home_view',$data);
        $data['grade']=$this->home_model->grade_sheet($username);
         $this->load->view('grade_sheet',$data);        
    }
    function admin()
    {
      $username= $this->home_model->index();
      $a=$this->home_model->is_admin($username);
      if((int)$a==0){
        $this->load->view('err');}
        // echo "OOPS!you cannot acces this page";
      else
        redirect('admin');
      

    }
    function instructor()
    {
      $username= $this->home_model->index();
      $a=$this->home_model->is_admin($username);
      if((int)$a==0){
        $this->load->view('err');}
        // echo "OOPS!you cannot acces this page";
      else
        redirect('instructor');
      

    }
}

?>