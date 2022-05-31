<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Members extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('members_model');
		$this->load->library('users');
	}
	
	public function logout()
	{
		$this->session->set_userdata('validate', FALSE);
		$this->users->delete_online($this->session->userdata('userid'));
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userid');
		$this->session->set_userdata('ses_login_msg', 'You are successfully logged out!');
		redirect();
	}
}