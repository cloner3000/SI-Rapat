<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undangan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/model_undangan');
	}

	public function index()
	{
		$this->load->helper('url');
		$data['title']='Undangan Rapat';
		$data['nama_user']=$this->session->userdata('nama_user');
		$data['isi']='admin/undangan/undangan';
		$data['jadwal'] = $this->model_undangan->daftarJadwal();
		$this->load->view('admin/layout/wrapper',$data);
	}
	public function tambah(){
		$this->form_validation->set_rules('kepada', 'Kepada', 'required');
		$this->form_validation->set_rules('subjek', 'Subjek', 'required');
		$this->form_validation->set_rules('nomor', 'Nomor', 'required');
		$this->form_validation->set_rules('id_event', 'Nomor', 'required');
		
		if($this->form_validation->run() === FALSE){
			$data=array(
				'title'	=> 'Undangan Rapat',
				'jadwal'=>$this->model_undangan->daftarJadwal(),
				'nama_user'=>$this->session->userdata('nama_user'),
				'jadwal'	=>$this->model_undangan->daftarJadwal(),
				'isi'	=> 'admin/undangan/undangan'
				);
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$data = array(
					'kepada'		=> $this->input->post('kepada'),
					'subjek'=>	$this->input->post('perihal'),
					'nomor' => $this->input->post('nomor_undangan'),
					'id_event' => $this->input->post('id_event')
						);
			$this->model_undangan->tambah($data);
					redirect(base_url().'admin/undangan/');
		}
	}

	// public function notif(){
	// 	$this->load->model('admin/model_undangan');

	// 	$data['jadwal'] = $this->model_undangan->daftarJadwal();
	// }

}
