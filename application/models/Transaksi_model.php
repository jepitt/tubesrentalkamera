<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
	public function tampilTransaksi()
	{
		$this->db->select('id_transaksi, nama_penyewa, tgl_pinjam, tgl_kembali, jumlah, (jumlah*barang.harga) as harga_sewa');
		$this->db->from('transaksi');
		$this->db->join('barang', 'barang.id_barang = transaksi.fk_barang');
		$query = $this->db->get();
		return $query->result_array();
	}	

	public function insert()
	{
		$data = array(
			'nama_penyewa' => $this->input->post('nama'),
			'fk_barang' => $this->input->post('nama_kamera'), 
			'tgl_pinjam' => $this->input->post('tgl_pinjam'), 
			'tgl_kembali' => $this->input->post('tgl_kembali'),
			'jumlah' => $this->input->post('jumlah')
		);
		$this->db->insert('transaksi', $data);
	}
}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */

 ?>