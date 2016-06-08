<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_undangan extends CI_Model {
	public function __contstruct(){
		$this->load->database();
	}

	public function tambah($data){
		return $this->db->insert('undangan_rapat', $data);
	}

	public function tambahJadwal($data){
		return $this->db->insert('event_rapat', $data);
	}

	public function daftarJadwal(){
		$query = $this->db->query('SELECT * FROM event_rapat order by event_date desc');
		return $query->result_array();
		
	}

	public function detailJadwal($id=FALSE){
		if($id===FALSE){
			$query=$this->db->get('event_rapat');
			return $query->result_array();
		}
		$query=$this->db->get_where('event_rapat', array('id_event_rapat'=>$id));
		return $query->row_array();
	}

	public function editJadwal($data){
		$this->db->where('event_date',$data['event_date']);
		return $this->db->update('event_rapat',$data);
	}
}