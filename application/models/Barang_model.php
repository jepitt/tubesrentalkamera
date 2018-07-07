<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function insert()
	{
		$data = array(
			'nama_barang' => $this->input->post('nama'), 
			'harga' => $this->input->post('harga'), 
			'stok' => $this->input->post('stok')
		);
		$this->db->insert('barang', $data);
	}

	public function tampilBarang()
	{
		$this->db->select('id_barang, nama_barang, harga, stok');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function hitungJumlah()
	{
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->num_rows(); 
	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */

?>