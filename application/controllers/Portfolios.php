<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolios extends CI_Controller {

	public function marketplace (){
		$form_entry = $this->input->post();
		$retailer = $form_entry['retailer'];
		$this->load->view('homes/portfolio', $retailer);
	}
}