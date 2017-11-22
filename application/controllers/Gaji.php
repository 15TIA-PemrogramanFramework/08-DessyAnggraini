<?php  
/**
* 
*/
class Gaji extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Gaji_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}
	function index() {
		if($this->session->userdata('karyawan'))
		{
			$data['gaji']=$this->Gaji_model->ambil_gaji_id($this->session->userdata('password')); 
			$this->load->view('Gaji/gaji_list',$data);
		}
		else if($this->session->userdata('admin'))
		{

			$data['gaji']=$this->Gaji_model->ambil_gaji(); 
			$this->load->view('Gaji/gaji_list',$data);
		}
	}
	function gaji($id_karyawan, $nama) {
		$data=array(
			'id_karyawan' =>set_value('id_karyawan', $id_karyawan) , 
			'nama' =>set_value('nama', $nama) ,
			'jumlahgaji' =>set_value('jumlahgaji') ,
			'id_gaji' =>set_value('id_gaji') ,
			'button'=>'Tambah',
			'action'=>site_url('Gaji/tambah_aksi_gaji')
		);
		$this->load->view('Gaji/gaji_form',$data);
	}
	function tambah_aksi_gaji() {
		$data=array(
			'id_karyawan' =>$this->input->post('id_karyawan'), 
			'nama' =>$this->input->post('nama'),
			'jumlahgaji' =>$this->input->post('jumlahgaji'),
		);
		$this->Gaji_model->tambah_data_gaji($data);
		redirect(site_url('Gaji'));
	}
}
?>