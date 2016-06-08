<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapat extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/model_undangan');
		$this->load->model('admin/model_rapat');
	}
	public function index(){
		$query = $this->model_rapat->daftar_rapat();
		$data = array(
			'title'=>'Manajemen Rapat',
			'jadwal'=>$this->model_undangan->daftarJadwal(),
			'nama_user'=>$this->session->userdata('nama_user'),
			'rapat'=>$query,
			'isi' =>'admin/rapat/rapat_view'
			);
		$this->load->view('admin/layout/wrapper',$data);
	}
	public function tambah(){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('hasil_rapat', 'Hasil Rapat', 'required');
		$this->form_validation->set_rules('tanggal_rapat', 'Tanggal Rapat', 'required');
		$this->form_validation->set_rules('jam_mulai_rapat', 'Jam Mulai', 'required');
		$this->form_validation->set_rules('jam_selesai_rapat', 'Jam Selesai', 'required');
		
		if($this->form_validation->run() === FALSE){
			$data=array(
				'title'	=> 'Menambah Rapat',
				'jadwal'=>$this->model_undangan->daftarJadwal(),
				'nama_user'=>$this->session->userdata('nama_user'),
				'isi'	=> 'admin/rapat/rapat_tambah'
				);
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			
					$slug = url_title($this->input->post('judul'),'dash',TRUE);
					$data = array(
						'judul'		=> $this->input->post('judul'),
						'slug'		=> $slug,
						'hasil_rapat'=>	$this->input->post('hasil_rapat'),
						'tanggal_rapat' => $this->input->post('tanggal_rapat'),
						'jam_mulai_rapat' => $this->input->post('jam_mulai_rapat'),
						'jam_selesai_rapat' => $this->input->post('jam_selesai_rapat'),
						'jenis_hasil_rapat'=> $this->input->post('jenis_hasil_rapat'),
						);
					$this->model_rapat->tambah($data);
					redirect(base_url().'admin/rapat/');
			
			
		}
	}

	public function edit($id){
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('hasil_rapat', 'Hasil Rapat', 'required');
		$this->form_validation->set_rules('id_rapat', 'Hasil Rapat', 'required');
		if($this->form_validation->run()===FALSE){
			$data['rapat'] = $this->model_rapat->detail_rapat();
			$data['detail'] = $this->model_rapat->detail_rapat($id);
			$data=array(
				'title'	=> 'Edit Hasil Rapat: '.$data['detail']['judul'],
				'rapat'	=> $this->model_rapat->detail_rapat(),
				'jadwal'=>$this->model_undangan->daftarJadwal(),
				'nama_user'=>$this->session->userdata('nama_user'),
				'detail'=>	$this->model_rapat->detail_rapat($id),
				'isi'	=> 'admin/rapat/rapat_edit'	
				);
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$slug = url_title($this->input->post('judul'),'dash',TRUE);
			$data = array(
				'judul'		=> $this->input->post('judul'),
				'slug'		=> $slug,
				'hasil_rapat'=> $this->input->post('hasil_rapat'),
				'jenis_hasil_rapat'=> $this->input->post('jenis_hasil_rapat'),
				'id_rapat'	=> $this->input->post('id_rapat')
				);
			$this->model_rapat->edit_rapat($data);
			redirect(base_url().'admin/rapat/');
		}
	}

	public function delete($id){
		$this->model_rapat->delete_rapat($id);
		redirect(base_url().'admin/rapat/');
	}

	// public function notif(){
	// 	$data['jadwal'] = $this->model_undangan->daftarJadwal();
	// 	$data['detail'] = $this->model_undangan->daftarJadwal($id);
	// 	$this->model_undangan->editJadwal($data);
	// }

}
