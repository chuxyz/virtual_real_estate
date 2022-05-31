<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function list_states()
	{
		$this->db->select('*')
		->from('states');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_state_towns($state_id)
	{
		$query = $this->db->query("SELECT states.state_name, towns.town_id, towns.town_name FROM states INNER JOIN towns ON states.state_id=towns.state_id WHERE towns.state_id = '$state_id' ORDER BY towns.town_name ASC"); 
		return $query->result();
		/*$this->db->select('*')
		->from('towns')
		->where(array('state_id'=>$state_id));
		$query = $this->db->get();
		return $query->result();*/
	}
	public function get_state_from_town($town_id)
	{
		$this->db->select('state_id')
		->from('towns')
		->where(array('town_id'=>$town_id));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_town_name($town_id)
	{
		$this->db->select('town_name')
		->from('towns')
		->where(array('town_id'=>$town_id));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_state_name($state_id)
	{
		$this->db->select('state_name')
		->from('states')
		->where(array('state_id'=>$state_id));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_property_name($prop_id)
	{
		$this->db->select('prop_name')
		->from('properties')
		->where(array('prop_id'=>$prop_id));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_town_id($town_name)
	{
		$this->db->select('town_id')
		->from('towns')
		->where(array('town_name'=>$town_name));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_prop_id($prop_name)
	{
		$this->db->select('prop_id')
		->from('properties')
		->where(array('prop_name'=>$prop_name));
		$query = $this->db->get();
		return $query->result();
	}
}