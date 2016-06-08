<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kajur extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/model_undangan');
		$this->load->model('rapat/model_rapat');
		if($this->session->userdata('id_user')==""){
			redirect('login/c_login');
		}
		$this->load->helper('text');
	}
	public function index(){
		$data['id_user']=$this->session->userdata('id_user');
		$data['nama_user']=$this->session->userdata('nama_user');
		$data['title']='Portal Rapat';
		$data['jadwal'] = $this->model_undangan->daftarJadwal();
		$data['rapat']=$this->model_rapat->daftar_rapat();
		$data['isi']='kajur/dashboard/index';
		$this->load->view('kajur/layout/wrapper', $data);
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
			'isi'	=> 'kajur/dashboard/read_view');
		$this->load->view('kajur/layout/wrapper',$data);
	}
	public function logout(){
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('id_role');
		session_destroy();
		redirect('login');
	}
}
