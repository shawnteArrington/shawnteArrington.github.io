<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('homes/homepage');
	}

	public function portfolio()
	{
		$this->load->view('homes/portfolio');
	}

	public function about()
	{
		$this->load->view('homes/about');
	}

	public function connect()
	{
		$this->load->view('homes/connect');
	}

	public function blog()
	{
		$this->load->view('homes/blog');
	}
	// public function client_login()
	// {
	// 	$this->load->view('clients/client_login_page');
	// }
}
