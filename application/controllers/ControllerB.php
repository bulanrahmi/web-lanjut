<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerB extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelB');
	}

	public function index()
	{
		$data['data_tabel'] = $this->ModelB->getAll();
		$this->load->view('mahasiswa_indexB',$data);
		
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambahB');

	}
		
		public function simpan_data()
		{
			$data = array(
			'id_004' => $this-> input ->post('id_004'),
			'kolom_jurusan' => $this-> input ->post('kolom_jurusan'),
			'kolom_kelas' => $this-> input ->post('kolom_kelas'),
			'kolom_isi' => $this-> input ->post('kolom_isi')
			
		);
			//print_r($data);
			$this->ModelB->store($data);
			redirect('controllerb/index','refresh');
	




	}



}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */