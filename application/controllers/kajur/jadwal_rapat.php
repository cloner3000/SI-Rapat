<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_rapat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/model_undangan');
	}

	public function index()
	{
		$query = $this->model_undangan->daftarJadwal();
		$this->load->helper('url');
		$data['title']='Penjadwalan Rapat';
		$data['nama_user']=$this->session->userdata('nama_user');
		$data['id_role']=$this->session->userdata('id_role');
		$data['jadwal']=$query;
		$data['isi']='kajur/undangan/jadwal_rapat';
		$this->load->view('kajur/layout/wrapper',$data);
	}

	public function tambah(){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('event_date', 'Event Date', 'required');
		$this->form_validation->set_rules('role_user', 'Id Role', 'required');

		if($this->form_validation->run() === FALSE){
			$data=array(
				'title'	=> 'Undangan Rapat',
				'nama_user'=>$this->session->userdata('nama_user'),
				'id_role'=>$this->session->userdata('id_role'),
				'isi'	=> 'kajur/undangan/jadwal_rapat'
				);
			$this->load->view('kajur/layout/wrapper',$data);
		}else{
			$data = array(
					'judul'	=> $this->input->post('judul'),
					'event_date'	=> $this->input->post('event_date'),
					'status'=> $this->input->post('status'),
					'role_user'=> $this->input->post('role_user')
						);
			$this->model_undangan->tambahjadwal($data);
					redirect(base_url().'kajur/jadwal_rapat/');
		}
	}

	public function read(){
		$data['jadwal']=$this->model_undangan->daftarJadwal();
		$data['detail']=$this->model_undangan->daftarJadwal($read);
		$data=array(
			'title'	=> $data['detail']['judul'],
			'jadwal' => $this->model_undangan->daftarJadwal(),
			'nama_user'=>$this->session->userdata('nama_user'),
			'detail'=> $this->model_undangan->daftarJadwal($read),
			'isi'	=> 'admin/dashboard/read_view');
		$this->load->view('kajur/layout/wrapper',$data);
	}

	// public function notif(){
	// 	$data['jadwal'] = $this->model_undangan->daftarJadwal();
	// 	$data['detail'] = $this->model_undangan->daftarJadwal($id);
	// 	$this->model_undangan->editJadwal($data);
	// }
}
