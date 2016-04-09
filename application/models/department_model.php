<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class department_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_department_list($id)
     {
          $sql =  $this->db->query("SELECT *  FROM`instructor` WHERE `DeptId` = '".$id."'");
          // $sql = 'SELECT * FROM `instructor` WHERE `DeptId` = $id';
          $result = $sql->result();
          return $result;
     }
}