<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$this->load->model('admin/model_undangan');
		$email 	= $this->input->post('email');
		$subjek	= $this->input->post('perihal');
		$pesan	= $this->input->post('pesan');

		$url = $_SERVER['HTTP_REFERER'];

		$config = array(
				'protocol'	=> 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
			    'smtp_port' => 465,
			    'smtp_user' => 'nurrahmanhaadii@gmail.com', //isi dengan gmailmu!
			    'smtp_pass' => '29juli199lima', //isi dengan password gmailmu!
			    'mailtype' => 'html',
			    'charset' => 'iso-8859-1',
			    'wordwrap' => TRUE
			);

		$this->load->library('email', $config);
	    $this->email->set_newline("\r\n");
	    $this->email->from($config['smtp_user']);
	    $this->email->to($email); //email tujuan. Isikan dengan emailmu!
	    $this->email->subject($subjek);
	    $this->email->message($pesan);

	    if($this->email->send())
	    {
	      echo 'Email sent. <a href="'.$url.'">KEMBALI</a>';
	    }
	    else
	    {
	      show_error($this->email->print_debugger());
	    }

	    $this->form_validation->set_rules('kepada', 'Kepada', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		$this->form_validation->set_rules('nomor_undangan', 'Nomor Undangan', 'required');
		$this->form_validation->set_rules('id_event_rapat', 'Id Event Rapat', 'required');
		
		if($this->form_validation->run() === FALSE){
			$data=array(
				'title'=>'Undangan Rapat',
				'nama_user'=>$this->session->userdata('nama_user'),
				'isi'	=> 'admin/undangan/undangan'
				);
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$data = array(
					'kepada'		=> $this->input->post('kepada'),
					'perihal'=>	$this->input->post('perihal'),
					'nomor_undangan' => $this->input->post('nomor_undangan'),
					'id_event_rapat' => $this->input->post('id_event_rapat')
						);
			$this->model_undangan->tambah($data);
					redirect(base_url().'admin/undangan/');
		}

	}
}