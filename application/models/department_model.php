<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class department_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
          // $this->load->database('mysite');
     }

     //read the department list from db
     function get_department_list($id)
     {    $sql =  $this->db->query("SELECT * FROM `instructor`,`department` WHERE `department`.`DeptName` LIKE '".$id."' AND `instructor`.`DeptId` = `department`.`DeptId`");
          // echo $id;
          // "SELECT *  FROM `mysite`.`instructor` WHERE (CONVERT(`InstId` USING utf8) LIKE '%SAM%' OR CONVERT(`Name` USING utf8) LIKE '%SAM%' OR CONVERT(`DeptId` USING utf8) LIKE '%SAM%' OR CONVERT(`Salary` USING utf8) LIKE '%SAM%')";
        //  $sql =  $this->db->query("SELECT *  FROM `instructor` WHERE `DeptId` = '".$id."'");
          // echo $sql->id;
          // $sql = 'SELECT * FROM `instructor` WHERE `DeptId` = $id';
          $result = $sql->result();
        //  print_r( $result);
          return $result;
     }
}
?>