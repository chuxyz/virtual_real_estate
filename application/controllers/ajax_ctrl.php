<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax_ctrl extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('func');
		$this->load->model('location_model');// load location model
	}
	
	public function list_town($state_id)
	{
		$result = '';
		$towns = $this->location_model->get_state_towns($state_id);
		foreach($towns as $town)
		{
			$town_name = $this->location_model->get_town_name($town->town_id);
			$town_name = $town_name[0]->town_name;
			$result = $result.'<option value="'.$town->town_id.'">'.$town_name.'</option>';
		}
		echo $result;
	}
	public function validation($request, $value = '')
	{
		if($request == 'state')
		{
			echo json_encode($this->func->check_state($value));
		}
		elseif($request == 'agent_name')
		{
			echo json_encode($this->func->check_agent_name($value));
		}
		elseif($request == 'location')
		{
			echo json_encode($this->func->check_location($value));
		}
		elseif($request == 'town2')
		{
			echo json_encode($this->func->check_town2($value));
		}
		elseif($request == 'town')
		{
			echo json_encode($this->func->check_town($value));
		}
		elseif($request == 'property_type2')
		{
			echo json_encode($this->func->check_property_type2($value));
		}
		elseif($request == 'property_type')
		{
			echo json_encode($this->func->check_property_type($value));
		}
		elseif($request == 'agent_address')
		{
			echo json_encode($this->func->check_agent_address($value));
		}
		elseif($request == 'agent_phone')
		{
			echo json_encode($this->func->check_agent_phone($value));
		}
		elseif($request == 'agent_email')
		{
			echo json_encode($this->func->check_agent_email($value));
		}
		elseif($request == 'agent_website')
		{
			echo json_encode($this->func->check_agent_website($value));
		}
		elseif($request == 'comment')
		{
			echo json_encode($this->func->check_comment($value));
		}
		elseif($request == 'price')
		{
			echo json_encode($this->func->check_price($value));
		}
		elseif($request == 'category')
		{
			echo json_encode($this->func->check_category($value));
		}
	}
}

/* End of file admin_ajax.php */
/* Location: ./application/controllers/admin_ajax.php */