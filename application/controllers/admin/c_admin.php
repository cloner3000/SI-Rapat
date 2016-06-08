<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//$this->load->helper('backbuttonhandle_helper');
		//backbuttonhandle();
		$this->load->model('admin/model_undangan');
		$this->load->model('rapat/model_rapat');
		if($this->session->userdata('id_user')==""){
			redirect('login');
		}
		$this->load->helper('text');
	}
	public function index(){
		$data['id_user']=$this->session->userdata('id_user');
		$data['nama_user']=$this->session->userdata('nama_user');
		$data['jadwal'] = $this->model_undangan->daftarJadwal();
		$data['title']='Portal Rapat';
		$data['rapat']=$this->model_rapat->daftar_rapat();
		$data['isi']='admin/dashboard/index';
		$this->load->view('admin/layout/wrapper', $data);
	}
	public function read($read){
		$data['rapat']=$this->model_rapat->daftar_rapat();
		$data['detail']=$this->model_rapat->daftar_rapat($read);
		$data=array(
			'title'	=> $data['detail']['judul'],
			'rapat' => $this->model_rapat->daftar_rapat(),
			'jadwal'=>$this->model_undangan->daftarJadwal(),
			'nama_user'=>$this->session->userdata('nama_user'),
			'detail'=> $this->model_rapat->daftar_rapat($read),
			'isi'	=> 'admin/dashboard/read_view');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// public function notif(){
	// 	$data['jadwal'] = $this->model_undangan->daftarJadwal();
	// 	$data['detail'] = $this->model_undangan->daftarJadwal($id);
	// 	$this->model_undangan->editJadwal($data);
	// }

	public function logout(){
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('id_role');
		session_destroy();
		redirect('login');
	}
}
