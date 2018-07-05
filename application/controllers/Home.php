<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}


	}
	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];  
		$this->load->view('home_view_logged_in_user', $data);
	}
	
}
