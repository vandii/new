<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class prof_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }
     function getProf($searchBook) {
         if(empty($searchBook))
            return array();

         $result = $this->db->like('title', $searchBook)
                  ->or_like('author', $searchBook)
                  ->get('books');

         return $result->result();
     } 

     //get the username & password from tbl_usrs
     // function get_prof($usr, $pwd)
     // {
     //      $sql = SELECT `InstId`, `Name`, `DeptId`, `Salary` FROM `instructor` WHERE `InstId`= 1214 ;
     //      $query = $this->db->query($sql);
     //      return $query->num_rows();
     // }
}?>