<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$data['title']='Portal Rapat';
		$data['isi']='login/dashboard/index';
		$this->load->view('login/layout/wrapper', $data);
	}
	public function cek_login(){
		$data = array ('id_user' => $this->input->post('id_user', TRUE), 'password' => ($this->input->post('password', TRUE)));
		$this->load->model('login/model_login');
		$hasil = $this->model_login->cek_user($data);
		if($hasil->num_rows() == 1){
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Login';
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['nama_user'] = $sess->nama_user;
				$sess_data['id_role'] = $sess->id_role;
				$this->session->set_userdata($sess_data);
			}
			if($this->session->userdata('id_role')=='1'){
				
				redirect('admin/c_admin');
			}
			else if($this->session->userdata('id_role')=='2'){
				redirect('kajur/c_kajur');
			}
			else if($this->session->userdata('id_role')=='3'){
				redirect('dosen/c_dosen');
			}
		}
		else{
			echo "<script> alert('Gagal Login: Cek Username, password!');history.go(-1);</script>";
		}
	}
} 