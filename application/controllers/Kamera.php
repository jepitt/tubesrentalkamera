<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Kamera extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view_logged_out');
	}

}

/* End of file Kamera.php */
/* Location: ./application/controllers/Kamera.php */

?>