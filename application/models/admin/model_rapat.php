<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rapat extends CI_Model {
	public function __contstruct(){
		$this->load->database();
	}

	public function daftar_rapat(){
		$query = $this->db->query('SELECT rapat.judul, rapat.jenis_hasil_rapat, rapat.slug, rapat.id_rapat, rapat.tanggal_rapat from rapat order by id_rapat desc');
		return $query->result_array();
	}

	public function tambah($data){
		return $this->db->insert('rapat', $data);
		return $this->db->insert('peserta_rapat', $data);
	}

	public function detail_rapat($id=FALSE){
		if($id===FALSE){
			$query=$this->db->get('rapat');
			return $query->result_array();
		}
		$query=$this->db->get_where('rapat', array('id_rapat'=>$id));
		return $query->row_array();
	}

	public function edit_rapat($data){
		$this->db->where('id_rapat',$data['id_rapat']);
		return $this->db->update('rapat',$data);
	}
	
	public function delete_rapat($id){
		$this->db->where('id_rapat',$id);
		return $this->db->delete('rapat');
	}
}