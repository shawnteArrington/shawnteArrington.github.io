<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function contact()
	{
		$user_data = $this->input->post();
		$result = $this->contact->validate_contact($user_data);
		if($result == "valid")
		{
			$user = $this->contact->add_contact($user_data);
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
			    $this->session->set_flashdata('contact_errors', $errors);
				redirect('#');
			}
		} 
		else
		{
			$errors = array(validation_errors());
			$this->session->set_flashdata('contact_errors', $errors);
			redirect('#');
		}
	}
}