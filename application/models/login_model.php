<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }


    function insertsession($username)
    {


        $type=$this->db->query("SELECT  `type` FROM `user` WHERE username = '" . $username . "'");
        $name=$this->db->query("SELECT  `fname` FROM `user` WHERE username = '" . $username . "'");
        $x=(int)$type->result() ;
         $t=$name->result();
         //foreach($name->result_array() as $t){
                $v= $t[0]->fname;
//Your code here

//}
$session = array('username' => $username,
'type'=>$x,
'name'=>$v );

        //print_r($name->result());
     //   echo $type->row();
        // $session->type = $type;
        return $this->db->insert('session', $session);
    }
    

     function user_logout()
     {
          $sql = "DELETE FROM `session` WHERE 1";
          $query =$this->db->query($sql);
          echo "logged out successfully";
     }
     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {    
           $sql = "select * from user where username = '" . $usr . "' and password = '" . md5($pwd)."'" ;
          // $sql = "select * from user where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'active'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
}?>