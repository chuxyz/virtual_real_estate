<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function check_admin($admin_name, $admin_pwd)
	{
		$this->db->select('*')
		->from('admin')
		->where(array('admin_name'=>$admin_name,'admin_pass'=>$admin_pwd));
		$query = $this->db->get();
		return $query->num_rows();
	}
	
}