<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		is_logged_in();
				
	}
	
	public function index()
	{
		$data['title'] = 'Profil';
		$data['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/index',$data);
		$this->load->view('templates/footer');
	}
	
	public function tambah_aspirasi()
	{
		$data['title'] = 'Tambah Aspirasi';
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('isi_aspirasi','Aspirasi','required');

		if($this->form_validation->run() == false ){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/tambah_aspirasi',$data);
		$this->load->view('templates/footer');
		}else{
			$data=[
				'name_aspirasi' => $this->input->post('name_aspirasi'),
				'isi_aspirasi' => $this->input->post('isi_aspirasi')
			];
			$this->db->insert('user_aspirasi',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data aspirasi anda berhasil ditambahkan!</div');
			redirect('user/tambah_aspirasi');
		}
	}

	public function pengaduan()
	{
		$data['title'] = 'Tambah Pengaduan';
		$data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('isi_pengaduan','isi_pengaduan','required');

		if($this->form_validation->run() == false ){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/pengaduan',$data);
		$this->load->view('templates/footer');
		}else{
			$data=[
				'judul_pengaduan' => $this->input->post('judul_pengaduan'),
				'isi_pengaduan' => $this->input->post('isi_pengaduan')
			];
			$this->db->insert('user_pengaduan',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data pengaduan anda berhasil ditambahkan!</div');
			redirect('user/pengaduan');
		}
	}
	
}