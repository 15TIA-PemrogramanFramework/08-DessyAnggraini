<?php  
/**
* 
*/
class Shif_model extends CI_Model
{
	public $nama_table_shif = 'shif';
	public $id_karyawan = 'id_karyawan';
	public $id_shif = 'id_shif';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data() {
		$this->db->order_by($this->id_shif,$this->order);
		return $this->db->get($this->nama_table_shif)->result();
	}
	function ambil_shif_id($id_karyawan) {
		$this->db->where($this->id_karyawan,$id_karyawan);
		return $this->db->get($this->nama_table_shif)->result();
	}

	//untuk insert data seluruh mahasiswa
	function tambah_data_shif($data) {
		return $this->db->insert($this->nama_table_shif,$data);
	}
	function ambil_shif() {
		return $this->db->get($this->nama_table_shif)->result();
	}

}
?>