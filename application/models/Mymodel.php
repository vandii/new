<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Mymodel Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $sql =  $this->db->query("SELECT *  FROM`instructor` WHERE `DeptId` = '".$keyword."'");
          // $sql = 'SELECT * FROM `instructor` WHERE `DeptId` = $id';
          $result = $sql->result();
          return $result;
        // $this->db->like('name',$keyword);
        // $query  =   $this->db->get('instructor');
        // return $query->result();
    }
}

?>   