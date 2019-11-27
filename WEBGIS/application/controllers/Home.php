<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function _construct() {
		parent::__construct;
    }
	public function index()
	{
		$this->load->view('home');
	}
	public function maps()
	{
		$this->load->view('maps');
	}
	public function toko()
	{
		$this->load->view('daftartoko');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function restoran_json()
	{
		$data = $this->db->get('restoran')->result();
		echo json_encode($data);
	}

}
