<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listing_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function list_for_sale($state_id, $town_id)
	{
		$query = $this->db->query("SELECT DISTINCT prop_id FROM listings WHERE state_id = '$state_id' AND town_id = '$town_id' AND category = 'sale'");
		return $query->result();
	}
	public function list_for_rent($state_id, $town_id)
	{
		$query = $this->db->query("SELECT DISTINCT prop_id FROM listings WHERE state_id = '$state_id' AND town_id = '$town_id' AND category = 'rent'");
		return $query->result();
	}
	public function get_sale_property_type($town_id, $prop_id)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('town_id'=>$town_id,'prop_id'=>$prop_id, 'category'=>'sale'));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_sale_property_type_limit($town_id, $prop_id, $offset, $limit)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('town_id'=>$town_id,'prop_id'=>$prop_id, 'category'=>'sale'))
		->limit($limit,$offset);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_rent_property_type($town_id, $prop_id)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('town_id'=>$town_id, 'prop_id'=>$prop_id, 'category'=>'rent'));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_rent_property_type_limit($town_id, $prop_id, $offset, $limit)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('town_id'=>$town_id, 'prop_id'=>$prop_id, 'category'=>'rent'))
		->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	/*public function get_all_property_type($town_id, $prop_id)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('prop_id'=>$prop_id));
		$query = $this->db->get();
		return $query->result();
	}*/
	public function get_prop_name($prop_id)
	{
		$this->db->select('prop_name')
		->from('properties')
		->where(array('prop_id'=>$prop_id));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_list_details($list_id)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('list_id'=>$list_id));
		$query = $this->db->get();
		return $query->result();
	}
	public function get_properties()
	{
		$this->db->select('*')
		->from('properties');
		$query = $this->db->get();
		return $query->result();
	}
	public function search($keyword)
	{
		$this->db->select('*')
		->from('states s')
		->join('towns t', 's.state_id = t.state_id')
		->join('listings l', 't.town_id = l.town_id')
		->join('properties p', 'l.prop_id = p.prop_id')
		->like('state_name', $keyword)
		->or_like('town_name', $keyword)
		->or_like('prop_name', $keyword)
		->or_like('prop_address', $keyword)
		->or_like('comment', $keyword)
		->order_by('time_added', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function search_limit($keyword, $offset, $limit)
	{
		$this->db->select('*')
		->from('states s')
		->join('towns t', 's.state_id = t.state_id')
		->join('listings l', 't.town_id = l.town_id')
		->join('properties p', 'l.prop_id = p.prop_id')
		->like('state_name', $keyword)
		->or_like('town_name', $keyword)
		->or_like('prop_name', $keyword)
		->or_like('prop_address', $keyword)
		->or_like('comment', $keyword)
		->order_by('time_added', 'desc')
		->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_recent($limit)
	{
		$this->db->select('*')
		->from('listings')
		->order_by('time_added', 'desc')
		->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_featured($limit)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('status'=>'featured'))
		->order_by('time_added', 'desc')
		->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_all_featured()
	{
		$this->db->select('*')
		->from('listings')
		->where(array('status'=>'featured'))
		->order_by('time_added', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_featured_prop_id($prop_id)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('prop_id'=>$prop_id, 'status'=>'featured'))
		->order_by('time_added', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_limit_featured($offset, $limit)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('status'=>'featured'))
		->order_by('time_added', 'desc')
		->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_limit_featured_prop_id($prop_id, $offset, $limit)
	{
		$this->db->select('*')
		->from('listings')
		->where(array('prop_id'=>$prop_id, 'status'=>'featured'))
		->order_by('time_added', 'desc')
		->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_expired_img_url()
	{
		$this->db->select('img_url')
		->from('listings')
		->where(array('duration <'=> time()));
		$query = $this->db->get();
		return $query->result();
	}
	
}