<?php  
/**
* 
*/
class Shif extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Shif_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}
	function index() {
		if($this->session->userdata('karyawan'))
		{
			$data['shif']=$this->Shif_model->ambil_shif_id($this->session->userdata('password')); 
			$this->load->view('Shif/shif_list',$data);
		}
		else if($this->session->userdata('admin'))	
		{

			$data['shif']=$this->Shif_model->ambil_shif(); 	
			$this->load->view('Shif/shif_list',$data);
		}
	}
	function shif($id_karyawan, $nama) {
			
		$data=array(
			'id_karyawan' =>set_value('id_karyawan', $id_karyawan) , 
			'nama' =>set_value('nama', $nama) ,
			'status' =>set_value('status') ,
			'id_shif' =>set_value('id_shif') ,
			'button'=>'Tambah',
			'action'=>site_url('Shif/tambah_aksi_shif')
		);
		$this->load->view('Shif/shif_form',$data);
	}
	function tambah_aksi_shif() {
		$data=array(
			'id_karyawan' =>$this->input->post('id_karyawan'), 
			'nama' =>$this->input->post('nama'),
			'status' =>$this->input->post('status')
		);
		$this->Shif_model->tambah_data_shif($data);
	
		
		redirect(site_url('Shif'));
	}
}
?>