<?php  
/**
* 
*/
class Admin_model extends CI_Model
{
	public $nama_table = 'admin';
	public $id_admin = 'id_admin';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password) {
		$this->db->where('nama_admin',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}
}
?>