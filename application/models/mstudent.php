<?php 

class mstudent extends CI_Model{

  // Create student record in database
  function addStudent($data)
  {
    $this->db->insert('nstudent', $data);
  }

  // Retrieve all student records
  function listStudents()
  {
    return $this->db->get('nstudent');
  }

  // Retrieve one student record
  function getStudent($id)
  {
    return $this->db->get_where('nstudent', array('id'=> $id));
  }

  // Update one student record
  function updateStudent($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('nstudent', $data); 
  }

  // Delete one student record
  function deleteStudent($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('nstudent'); 
  }

  function pushgrades()
  {
     $table_row = array();

    $query=$this->db->query("SELECT * FROM `nstudent` WHERE 1");
    foreach ($query->result() as $student)
    {
      $a = (int)$student->s_name;
      $b = $student->Grade;
      //$table_row[] = mailto($student->email);
      $c = $student->CourseNo;
      $qw=$this->db->query("SELECT * FROM `enroll` WHERE 1");
      foreach ($qw->result() as $entry) { $c1=0;$c2=0;
      if ($entry->Rollno == $a) {
         $c1++;
        // echo "  here1  ";
      }
      if((string)$entry->CourseNo == $c){
        $c1++;
      //echo "here2\n";
      }
      if((int)$entry->Semester == 2){
          $c1++;
      //    echo "here3\n";
        }
      if ((int)$entry->Year == 2015)
        {  $c1++;
        //  echo "here4\n";
        }
    //  echo $c1;
      }
      $year = 2015;
      $sem=2;
      $q =$this->db->query("SELECT * from `enroll` WHERE `Rollno`='".$a."' AND `Semester` ='".$sem."' AND `Year` ='".$year."'");
      //print_r($q->result());
      //echo $q->num_rows();
            if((string)$entry->CourseNo == $c){
        $c1++;
     // echo "This shit is  fucked up\n";
      }
//      $q=$this->db->update(" UPDATE `enroll` SET `Grade`='".$b."' WHERE `Rollno`='".$a."' AND `CourseNo`='".$c."' AND `Semester` ='2' AND `Year` ='2015'");
      $query = $this->db->query("SELECT * FROM `enroll` WHERE `Rollno`='".$a."' AND `CourseNo`='".$c."' AND `Semester` ='".$sem."' AND `Year` ='".$year."'");
      //echo $query->num_rows();
      if($query->num_rows()==0)
      {

        //$this->db->insert("INSERT INTO `enroll`(`Rollno`, `CourseNo`, `Grade`, `Semester`, `Year`) VALUES ($a,$c,$b,$sem,$year)");
      }
      else
      {
        $data=array('Rollno' =>$a ,'CourseNo' => $c, 'Semester' =>$sem ,'Year'=>$year,'Grade'=>$b);
      $this->db->where('enroll', array('Rollno' =>$a ,'CourseNo' => $c, 'Semester' =>$sem ,'Year'=>$year ));
      $w=$this->db->update('enroll', $data); 
     // echo $w;
      //echo $this->db->affected_rows();
//        $q=$this->db->update(" UPDATE `enroll` SET `Grade`='".$b."' WHERE `Rollno`='".$a."' AND `CourseNo`='".$c."' AND `Semester` ='2' AND `Year` ='2015'");  
      }
  //    print_r($qw->result());
    //  $q = $this->db->query("SELECT * FROM `enroll` WHERE `Rollno`='".$a."' AND `CourseNo`='".$c."' AND `Semester` ='2' AND `Year` ='2015'");
    //print_r($q->result());
     // echo $q->num_rows() ;
      //if ( $q->num_rows() > 0 )
      //{
        //echo "here";
      //}
     // echo "here";
//      $this->db->insert("INSERT INTO `enroll`(`Rollno`, `CourseNo`, `Grade`, `Semester`, `Year`) VALUES ($a,$c,$b,'2','2015')");
        

    }
  }

}
/* End of file nstudent.php */
/* Location: ./system/application/models/nstudent.php */
