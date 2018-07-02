<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function insert()
	{
		$data = array(
			'username' => $this->input->post('username'), 
			'fullname' => $this->input->post('fullname'), 
			'email' => $this->input->post('email'), 
			'password' => $this->input->post('password')
			'level' => $this->input->post('level'),
		);
		$this->db->insert('user', $data);
	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */

?>