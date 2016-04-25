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
        $this->load->model('admin_model');  
        
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
    function add_courses()
    {
      $this->load->view('logout');
      $username= $this->home_model->index();
        $a=$this->home_model->is_admin($username);
                  $sem = 2;
          $y = 2015;
        if((int)$a==0 ){
          $this->load->view('err');}
          elseif ((int)$a==2) {
            $this->load->view('err');
              # code...
          }
        //   elseif ($this->form_validation->run() == FALSE)
        // {
        //     // fails
        //     $this->load->view('add_courses');
        //     # code...
        //   }
        elseif ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('add_courses');
          # code...
        }
        else
        {
          // $this->load->view('add_courses');
          $data  = array( 
          'CourseNo' =>  $this->input->post('cno'),
          'CourseName' => $this->input->post('cname'),
          'DeptId' =>  $this->input->post('Did'),
          'Credits' =>  $this->input->post('credit'),
          'InstId' =>  $this->input->post('Iid'),
          'Semester' => $sem,
          'Year' =>$y);
         // print_r($data);
          if($this->admin_model->insert_course($data))
            echo "Added successully";
          redirect('admin/index');
        }
    }

    function get_students()
    {
      $this->load->view('logout');
      $username= $this->home_model->index();
        $a=$this->home_model->is_admin($username);
        if((int)$a==0){
          $this->load->view('err');}
        else
        {
          $details=$this->admin_model->get_student_details();
          $data['stu']=$details;
          $this->load->view('Stu',$data);
        }
    }

    function get_instructor()
    {
        $this->load->view('logout');
      $username= $this->home_model->index();
        $a=$this->home_model->is_admin($username);
        if((int)$a==0){
          $this->load->view('err');}
          elseif((int)$a==2 ){
          $this->load->view('err');}
        else
        {
          $details=$this->admin_model->get_instructor_details();
          $data['in']=$details;
          $this->load->view('in',$data);
        }
    }

    function delete()
    {
      $this->load->view('logout');
      $username= $this->home_model->index();
        $a=$this->home_model->is_admin($username);
        if((int)$a==0){
          $this->load->view('err');}
          elseif((int)$a==2 ){
          $this->load->view('err');}
          else
          {   
              $this->load->view('delete_view1');
             $prof = $this->input->post("txt_id");
              $c = $this->input->post("course_id");
           $q= $this->admin_model->delete($prof,$c);
           // echo $q;
           if($q==1)
            echo "<div class='alert alert-success'>
      <strong>Success!</strong> Deleted
      </div>";
          else if($q==0)
            echo "<div class='alert alert-warning'  >
  <strong>Warning!</strong> Record does not exist
</div>";
          }
    }



}

?>