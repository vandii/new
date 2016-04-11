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
}
    
?>