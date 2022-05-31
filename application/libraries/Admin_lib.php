<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_lib
{
	private $CI;
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		$this->CI->load->model('admin_model');
	}
	
	public function islogged()
	{
		//$CI =& get_instance();
		if($this->CI->session->userdata('admin_validate') && $this->CI->session->userdata('admin_name'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}