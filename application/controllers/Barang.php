<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
 		if($this->session->userdata('logged_in')){
 			$session_data = $this->session->userdata('logged_in');
 			$data['username'] = $session_data['username'];
 			$data['level'] = $session_data['level'];
 			$current_controller = $this->router->fetch_class();
 			$this->load->library('acl');
 			if (! $this->acl->is_public($current_controller))
 			{
 				if (! $this->acl->is_allowed($current_controller, $data['level']))
 				{
 					echo '<script>alert("Anda Tidak Memiliki Hak Akses")</script>';
 					redirect('home','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
	}

	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];
 		$data['list_barang'] = $this->barang_model->tampilBarang();
		$this->load->view('barang_view',$data);
	}

	public function register()
 	{
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('nama','Nama Kamera','trim|required');
 		$this->form_validation->set_rules('harga','Harga Kamera','trim|required');
 		$this->form_validation->set_rules('stok', 'Stok', 'trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$session_data=$this->session->userdata('logged_in');
 			$data['username']=	$session_data['username'];
 			$this->load->view('tambah_barang_view', $data);
 		} else {
 			$this->load->model('barang_model');
 			$this->barang_model->insert();
 			echo '<script>alert("Data berhasil disimpan")</script>';
 			redirect('barang','refresh');
 		}
 	}

 	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("barang_model");
		$this->barang_model->delete($id);

		redirect('barang');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */

 ?>