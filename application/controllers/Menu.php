<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
    public function __construct()
	{
		parent ::__construct();
		is_logged_in();
				
	}
    
    public function index()
    {
        $data['title'] = 'Data Aspirasi';
		$data['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		
        $data['menu']=$this->db->get('user_aspirasi')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/index',$data);
		$this->load->view('templates/footer');  
    }

    public function data_pengaduan()
    {
        $data['title'] = 'Data Pengaduan';
		$data['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		
        $data['menu']=$this->db->get('user_pengaduan')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/data_pengaduan',$data);
		$this->load->view('templates/footer');  
    }
}