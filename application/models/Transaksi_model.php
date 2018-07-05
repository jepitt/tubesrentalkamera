<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
	public function tampilTransaksi()
	{
		$this->db->select('id_transaksi, tgl_pinjam, tgl_kembali, jumlah');
		$this->db->from('transaksi');
		$query = $this->db->get();
		return $query->result_array();
	}	

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */

 ?>