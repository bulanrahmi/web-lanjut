<?php

class CController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cmodel');
	}

 public function index()
{
		$data['data_tabel'] = $this->Cmodel->getAll();
		$this->load->view('mahasiswa_indexC',$data);
		
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambahC');

	}
		
		public function simpan_data()
		{
		
			$id_04 			= $this->input ->post('txtid_04');
			$kolom_jurusan 	= $this->input ->post('txtjurusan');
			$kolom_kelas 	= $this->input ->post('txtkelas');
			$kolom_isi		= $this->input ->post('txtisi');

			$data = [
				'id_04' 		=> $id_04,
				'kolom_jurusan'	=> $kolom_jurusan,
				'kolom_kelas' 		=> $kolom_kelas,
				'kolom_isi' 	 	=> $kolom_isi,
			];
			

			//print_r($data);
			$this->Cmodel->simpan_data($data);
			redirect('CController/index');
	

}
}
