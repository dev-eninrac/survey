<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	public function circ()
	{
		$this->load->view('survey');
	}
	public function adani()
	{
		$this->load->view('survey');
	}
  	public function kpmg()
	{
		$this->load->view('survey');
	}
  	public function nec()
	{
		$this->load->view('survey');
	}
  	public function tata_project()
	{
		$this->load->view('survey');
	}
  	public function vikram_solar()
	{
		$this->load->view('survey');
	}
}
