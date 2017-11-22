<?php  
/**
* 
*/
class Gaji_model extends CI_Model
{
	public $nama_table_gaji = 'gaji';
	public $id_karyawan = 'id_karyawan';
	public $id_gaji = 'id_gaji';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_gaji() {
		$this->db->order_by($this->id_gaji,$this->order);
		return $this->db->get($this->nama_table_gaji)->result();
	}
	function ambil_gaji_id($id_karyawan) {
		$this->db->where($this->id_karyawan,$id_karyawan);
		return $this->db->get($this->nama_table_gaji)->result();
	}

	//untuk insert data seluruh mahasiswa
	function tambah_data_gaji($data) {
		return $this->db->insert($this->nama_table_gaji,$data);
	}

}
?>