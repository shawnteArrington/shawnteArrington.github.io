<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		date_default_timezone_set("America/Los_Angeles");
	}

	public function register(){
		$user_data = $this->input->post();
		$result = $this->client->validate_registration($user_data);
		if($result == "valid")
		{
			$user = $this->client->register($user_data);
			// var_dump($user);
			if($user)
			{				
				$this->session->set_userdata('user_session', $this->user->get_user_by_id($user));
				// var_dump($this->session->userdata('user_session'));
				// $this->welcome($this->session->userdata('user_session'));
			}
			else
			{	
				$errors = array(validation_errors());
			    $this->session->set_flashdata('registration_errors', $errors);
				redirect('/');
			}
		} 
		else
		{
			$errors = array(validation_errors());
			$this->session->set_flashdata('registration_errors', $errors);
			redirect('/');
		}
	}

	public function login()
	{	
		$user_data = $this->input->post();	
		$result = $this->client->validate_login($user_data);
		if($result != "valid")
		{	
			$errors = array(validation_errors());
			$this->session->set_flashdata("login_errors", $errors);
			redirect('/');
		}
		else
		{						   
			$user = $this->client->login($user_data);
			if ($user)
			{
				$this->session->set_userdata('user_session', $user);
				// $this->welcome($this->session->userdata('user_session'));
			}
			else
			{
				$errors = array(validation_errors());
				$this->session->set_flashdata('login_errors', $errors);
				redirect('/');
			}
		}
	}
	
	// public function welcome()
	// {
	// 	$old_user_session = $this->session->userdata('user_session');
	// 	$appointments_all = $this->appointment->get_all_tasks($old_user_session['id']);
	// 	$this->session->set_userdata('user_session', $appointments_all);
	// 	$user_session = $this->session->userdata('user_session');
	// 	$this->load->view('appointments_view', array('user_session' => $user_session));
	// }

	public function logout()
	{
		$user_session_data = $this->session->all_userdata();
		$this->session->unset_userdata($user_session_data);
		$this->session->sess_destroy();
		redirect('/');
	}

	public function client_dashboard()
	{
		$this->load->view('clients/client_dashboard');
	}

}