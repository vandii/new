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

}
/* End of file nstudent.php */
/* Location: ./system/application/models/nstudent.php */
