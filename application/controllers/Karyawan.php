<?php  
/**
* 
*/
class Karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}
	function index() {
		if($this->session->userdata('admin'))
		{
			$data['karyawan']=$this->Karyawan_model->ambil_data(); 
			$this->load->view('Karyawan/karyawan_list',$data);
		}
		else if($this->session->userdata('karyawan'))
		{

			$data['karyawan']=$this->Karyawan_model->ambil_data_id($this->session->userdata('password')); 
			$this->load->view('Karyawan/karyawan_list',$data);
		}
	}
	function tambah() {
		$data=array(
			'nama' =>set_value('nama') , 
			'ttl' =>set_value('ttl') ,
			'jeniskelamin' =>set_value('jeniskelamin') ,
			'alamat' =>set_value('alamat') ,
			'id_karyawan' =>set_value('id_karyawan') ,
			'button'=>'Tambah',
			'action'=>site_url('Karyawan/tambah_aksi')
		);
		$this->load->view('Karyawan/karyawan_form',$data);
	}
	function tambah_aksi() {
		$data=array(
			'nama' =>$this->input->post('nama'), 
			'ttl' =>$this->input->post('ttl'),
			'jeniskelamin' =>$this->input->post('jeniskelamin'),
			'alamat' =>$this->input->post('alamat'),
		);
		$this->Karyawan_model->tambah_data($data);
		redirect(site_url('Karyawan'));
	}
	function delete($id_karyawan) {
		$this->Karyawan_model->hapus_data($id_karyawan);
		redirect(site_url('Karyawan'));
	}
	function edit($id_karyawan) {
		$kar=$this->Karyawan_model->ambil_data_id($id_karyawan);
		$data=array(
			'nama' =>set_value('nama',$kar[0]->nama) , 
			'ttl' =>set_value('ttl',$kar[0]->ttl) ,
			'jeniskelamin' =>set_value('jeniskelamin',$kar[0]->jeniskelamin) ,
			'alamat' =>set_value('alamat',$kar[0]->alamat) , 
			'id_karyawan' =>set_value('id_karyawan',$kar[0]->id_karyawan) , 
			'button'=>'Edit',
			'action'=>site_url('Karyawan/edit_aksi')
		);
		$this->load->view('Karyawan/karyawan_form',$data);
	}
	function edit_aksi() {
		$data=array(
			'nama' =>$this->input->post('nama'), 
			'ttl' =>$this->input->post('ttl'),
			'jeniskelamin' =>$this->input->post('jeniskelamin'),
			'alamat' =>$this->input->post('alamat'),
		);
		$id_karyawan=$this->input->post('id_karyawan');
		$this->Karyawan_model->edit_data($id_karyawan,$data);
		redirect(site_url('Karyawan'));
	}
}
?>