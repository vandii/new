<?php
class admin_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_course($data)
    {
    	return $this->db->insert('courses', $data);
    }

    function get_student_details()
    {
    	$q=$this->db->query("SELECT * FROM `student`,`department` Where `student`.`DeptId`=`department`.`DeptId` ORDER BY `Rollno` DESC  ");
    	//print_r($q->result());
    	return $q->result();
    }
    function get_instructor_details()
    {
        $q=$this->db->query("SELECT * FROM `instructor`,`department` WHERE `instructor`.`DeptId`=`department`.`DeptId`");
        return ($q->result());
    }
    function delete($Rollno,$courseno)
    {
        $this->db->where(array('Rollno' =>$Rollno , 'CourseNo'=> $courseno));
       $this->db->delete('enroll');
       if ($this->db->affected_rows()>0)
        return 1;
    else
        return 0;
    }
}
    
?>