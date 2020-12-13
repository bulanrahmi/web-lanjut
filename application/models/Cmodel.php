<?php

class Cmodel extends CI_Model {

	public function getAll()
	{

		return $this->db->get('c_tabel') -> result();
	}
	public function simpan_data ($object)
	{
		return $this->db->insert('c_tabel',$object);
	}
}
