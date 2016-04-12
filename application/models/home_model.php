<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends CI_Model
{
     public function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }
     public function index()
     {

        $t=$this->db->query("SELECT * FROM `session` WHERE 1");
        $v=$t->result();
        //echo $v[0]->username;
        return $v[0]->username;
     }
          public function get_name()
     {

        $t=$this->db->query("SELECT * FROM `session` WHERE 1");
        $v=$t->result();
        //echo $v[0]->username;
        return $v[0]->name;
     }

     public function tot_credits($username)
     {	
//     	echo "I am in ";
     	$r=$this->db->query("SELECT SUM(`credits`) as `sum` FROM `enroll` , `courses` WHERE `enroll`.`Rollno`='" . $username . "' AND `enroll`.`Semester` = 2 AND `enroll`.`Year` = '2015' AND `enroll`.`CourseNo` = `courses`.`CourseNo`");
   //  	$v=($r->result());
     	return $v[0]->sum ;

     }
     function get_details()
     {
        $v= $this->db->query("SELECT * FROM `session`,`user` WHERE `session`.`username`=`user`.`username`");
    //    print_r($v->result());
        return($v->result());
     }

      function current_courses($username)
      {
      //	echo $username;
     // 	print_r( $this->db->query("SELECT `CourseNo`, `Semester`, `Year` FROM `enroll` WHERE `Rollno`='" . $username . "' "));
      //	$this->db->query("SELECT `CourseNo`, `Semester`, `Year` FROM `enroll` WHERE `Rollno`='" . $username . "' AND `Semester` = 2 AND `Year` = '2015'");
      	$query = $this->db->query("SELECT `enroll`.`CourseNo`, `coursename`,`credits` FROM `enroll` , `courses` WHERE `enroll`.`Rollno`='" . $username . "' AND `enroll`.`Semester` = 2 AND `enroll`.`Year` = '2015' AND `enroll`.`CourseNo` = `courses`.`CourseNo`");
      	// $query =$this->db->query("SELECT `CourseNo`, `coursename`,`credits` `Year` FROM `enroll` AND `courses` WHERE `enroll.Rollno`='" . $username . "' AND `Semester` = 2 AND `Year` = '2015'");
      	$res=$query->result();
      	// print_r($res);
      	// foreach ($result as $res) {
      	// 	echo $res->CourseNo;
      	// 	# code...
      	// }
      	return $query->result();

      }

      function grade_sheet($username)
      {
      	// SELECT `enroll`.`CourseNo`, `coursename`,`credits`,`Grade` FROM `enroll` , `courses` WHERE `enroll`.`Rollno`=13232 AND `enroll`.`CourseNo` = `courses`.`CourseNo`AND `enroll`.`Semester` != '2' AND `enroll`.`Year` != '2015'
      	$query = $this->db->query("SELECT `enroll`.`CourseNo`, `coursename`,`credits`,`Grade`,`enroll`.`Year`,`enroll`.`Semester` FROM `enroll` , `courses` WHERE `enroll`.`Rollno`='" . $username . "' AND `enroll`.`CourseNo` = `courses`.`CourseNo`");
     //	print_r($query->result());
      	return $query->result();
      }
      function is_admin($username)
      {
  		$query =$this->db->query("SELECT`type` FROM `session` WHERE `username` ='" . $username . "'");
	   	$q =$query->result();
		  return $q[0]->type;      	
      }
}



?>