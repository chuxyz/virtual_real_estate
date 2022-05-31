<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MY_Controller
{
	public $head = 'layout/head';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('listing_model');
		$this->load->model('location_model');
		$this->load->model('gen_model');
		$this->load->library('func');
		$this->load->library('admin_lib', '', 'admin'); //load admin library
	}
	
	public function index()
	{
		$data['home'] = '';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'admin_view/admin_login';
		$data['title'] = $this->site_name.' | Admin Login';
		if($this->admin->islogged())
		{
			$data['title'] = $this->site_name.' | Home';
			//$view = 'index';
			$data['admin_name'] = $this->session->userdata('admin_name');
			redirect();
		}
		if($this->input->post('submit') == TRUE)
		{
			$admin_name = $this->input->post('admin_name');
			$admin_pwd = md5($this->input->post('admin_pwd'));
			if($this->admin_model->check_admin($admin_name, $admin_pwd) <= 0) // user does not exist
			{
				$this->session->set_userdata('admin_validate', FALSE); ///dont validate session
				$this->session->set_userdata('ses_login_msg','Incorrect Username or Password');
				$data['ses_msg'] = $this->session->userdata('ses_login_msg');
				$view = 'admin_view/admin_login';
				$data['title'] = $this->site_name.' | Login';
				
			}
			else //user does exist
			{
				$this->session->set_userdata('admin_validate', TRUE); // validate user session
				$this->session->set_userdata('admin_name', $admin_name);
				//$view = 'index';
				$data['title'] = $this->site_name.' | Home';
				$data['admin_name'] = $this->session->userdata('admin_name');
				redirect();
			}
		}
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$data['states'] = $this->location_model->list_states();
		$this->load->view($view, $data);
	}
	
	public function tag($list_id)
	{
		if(!$this->admin->islogged())
		{
			redirect();
		}
		$this->func->set_tag($list_id);
		redirect($this->session->userdata('url'));
	}
	public function untag($list_id)
	{
		if(!$this->admin->islogged())
		{
			redirect();
		}
		$this->func->unset_tag($list_id);
		redirect($this->session->userdata('url'));
	}
	
	public function logout()
	{
		$this->session->set_userdata('admin_validate', FALSE);
		$this->session->unset_userdata('admin_name');
		$this->session->set_userdata('ses_login_msg', 'You are successfully logged out!');
		redirect('adminlogin');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/admin.php */