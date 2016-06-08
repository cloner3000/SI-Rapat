<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rapat extends CI_Model {
	public function __contstruct(){
		$this->load->database();
	}

	public function daftar_rapat($read=FALSE){
		if($read===FALSE){
			$query = $this->db->query('SELECT * FROM rapat WHERE jenis_hasil_rapat="Publish" order by id_rapat desc');
			return $query->result_array();
		}
		$query=$this->db->get_where('rapat', array('slug' => $read));
		return $query->row_array();
	}
}