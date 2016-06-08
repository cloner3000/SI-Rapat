<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	public function cek_user($data){
		$query = $this->db->get_where('user', $data);
		return $query;
	}
}