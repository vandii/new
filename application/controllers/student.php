<?php

class Student extends CI_Controller {

     public function __construct()
     {  
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
          $this->load->library('session');
          $this->load->helper('form');
          // $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');

        $this->load->model('home_model');
     }

  function index()
  { 
    $this->load->view('logout');

    // display information for the view
    $data['title'] = "Classroom: Home Page";
    $data['headline'] = "Welcome to the Classroom Management System";
    $data['include'] = 'student_index';
    $username= $this->home_model->index();
      $a=$this->home_model->is_admin($username);
      if((int)$a==0){
        $this->load->view('err');}
        else
      $this->load->view('template', $data);
      $this->load->view('footer');
  }

  function add()
  {   
    $this->load->view('logout');
    $this->load->helper('form');
    
    // display information for the view
    $data['title'] = "Classroom: Add Student";
    $data['headline'] = "Add a New Student";
    $data['include'] = 'student_add';

    $this->load->view('template', $data);
    $this->load->view('footer');
  }

  function create()
  {
    $this->load->view('logout');
    $this->load->helper('url');
    
    $this->load->model('MStudent','',TRUE);
    $this->MStudent->addStudent($_POST);
    redirect('student/add','refresh');
    $this->load->view('footer');
  }

  function listing()
  {  
    $this->load->view('logout');
    $this->load->library('table');
    
    $this->load->model('MStudent','',TRUE);
    $students_qry = $this->MStudent->listStudents();

    // generate HTML table from query results
    $tmpl = array (
      'table_open' => '<table border="0" cellpadding="3" cellspacing="0">',
      'heading_row_start' => '<tr bgcolor="#66cc44">',
      'row_start' => '<tr bgcolor="#dddddd">' 
      );
    $this->table->set_template($tmpl); 
    
    $this->table->set_empty("&nbsp;"); 
  
    $this->table->set_heading('', 'username', 'Grade',  'Email','CourseNo');

  
    $table_row = array();
    foreach ($students_qry->result() as $student)
    {
    //  print_r($students_qry->result());
      $table_row = NULL;
      $table_row[] = '<nobr>' . 
        anchor('student/edit/' . $student->id, 'edit') . ' | ' .
        anchor('student/delete/' . $student->id, 'delete',
          "onClick=\" return confirm('Are you sure you want to '
            + 'delete the record for $student->s_name?')\"") .
        '</nobr>';
      // replaced above :: $table_row[] = anchor('student/edit/' . $student->id, 'edit');
      $table_row[] = $student->s_name;
      $table_row[] = $student->Grade;

//      $table_row[] = $student->address;
      // $table_row[] = $student->city;
      // $table_row[] = $student->state;
      // $table_row[] = $student->zip;
      // $table_row[] = $student->phone;
      $table_row[] = mailto($student->email);
      $table_row[] = $student->CourseNo;

      $this->table->add_row($table_row);
    }    

    $students_table = $this->table->generate();
    
    // generate HTML table from query results
    // replaced above :: $students_table = $this->table->generate($students_qry);
    
    // display information for the view
    $data['title'] = "Classroom: Student Listing";
    $data['headline'] = "Student Listing";
    $data['include'] = 'student_listing';

    $data['data_table'] = $students_table;

    $this->load->view('template', $data);
    $this->load->view('footer');
  }
  
  function edit()
  { $this->load->view('logout');
    $this->load->helper('form');

    $id = $this->uri->segment(3);
    $this->load->model('MStudent','',TRUE);
    $data['row'] = $this->MStudent->getStudent($id)->result();

    // display information for the view
    $data['title'] = "Classroom: Edit Student";
    $data['headline'] = "Edit Student Information";
    $data['include'] = 'student_edit';

    $this->load->view('template', $data);
    $this->load->view('footer');
  }

  function update()
  { $this->load->view('logout');
    $this->load->model('MStudent','',TRUE);
    $this->MStudent->updateStudent($_POST['id'], $_POST);
    redirect('student/listing','refresh');
    $this->load->view('footer');
  }

  function delete()
  {

    $this->load->view('logout');
    $id = $this->uri->segment(3);
    
    $this->load->model('MStudent','',TRUE);
    $this->MStudent->deleteStudent($id);
    redirect('student/listing','refresh');
    $this->load->view('footer');
  }
  
  function push_grades()
  {
    $this->load->view('logout');
    $this->load->model('MStudent');
    $this->MStudent->pushgrades();
    //echo "Success!!!";
    $this->load->view('success');
  }  

}
/* End of file student.php */
/* Location: ./system/application/controllers/student.php */
