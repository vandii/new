<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Search Extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // echo "fuck" ;
        $this->load->model('department_model');
        
    }

    public function index()
    {
    $this->load->view('header');
     $this->load->view('result_view1');
     $this->load->view('footer');   
    }

     function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->department_model->get_department_list($keyword);
        $this->load->view('result_view',$data);
    }

}

?>