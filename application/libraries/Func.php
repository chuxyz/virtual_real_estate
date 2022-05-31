<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Func
{
	public $CI;
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		$this->CI->load->model('gen_model');
		$this->CI->load->model('listing_model');
	}
	
	public function islogged()
	{
		//$CI =& get_instance();
		if($this->CI->session->userdata('validate') && $this->CI->session->userdata('username'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function short_details($text)
	{
		$txt = $text;
		if(strlen($text) > 100)
		{
			$txt = substr($text, 0, 100);
			$txt = $txt.'...';
		}
		return $txt;
	}
	public function valid_email($str)
	{
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	public function fixGlobalFilesArray($files) {
         $ret = array();
         
        if(isset($files['tmp_name']))
         {
             if (is_array($files['tmp_name']))
             {
                 foreach($files['name'] as $idx => $name)
                 {
                     $ret[$idx] = array(
                         'name' => $name,
                         'tmp_name' => $files['tmp_name'][$idx],
                         'size' => $files['size'][$idx],
                         'type' => $files['type'][$idx],
                         'error' => $files['error'][$idx]
                     );
                 }
             }
             else
             {
                 $ret = $files;
             }
         }
         else
         {
             foreach ($files as $key => $value)
             {
                 $ret[$key] = $this->fixGlobalFilesArray($value);
             }
         }
         
        return $ret;
     }
	 public function encrypt_file_name($file)
	 {
		 $start = 0;
		 $rand = rand(5,100);
		 while($start <= $rand)
		 {
			 $file = md5($file.time());
			 $rand--;
		 }
		 return $file;
	 }
	 public function delete_expired_listing()
	{
		/////////// Delete associated files...
		$ex_img_url = $this->CI->listing_model->get_expired_img_url();
		foreach($ex_img_url as $ex_imgs)
		{
			$imgs = explode(',',$ex_imgs);
			foreach($imgs as $img)
			{
				unlink($img);
			}
		}
		////////////////////// then Delete DB Record
		$this->CI->gen_model->delete('listings', array('duration <'=> time()));
	}
	public function set_tag($list_id)
	{
		$list_obj = $this->CI->listing_model->get_list_details($list_id);
		$cat = $list_obj[0]->category;
		if($cat == 'sale')
		{
			$tag = 'sold';
		}
		else
		{
			$tag = 'rented';
		}
		$this->CI->gen_model->update('listings', array('tag'=>$tag), array('list_id'=>$list_id));
	}
	public function unset_tag($list_id)
	{
		$this->CI->gen_model->update('listings', array('tag'=>''), array('list_id'=>$list_id));
	}
	//*******************************=AJAX=**************************************\\
	public function check_state($state)
	{
		// if the state is blank
  		if (!$state || empty($state) || $state == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "State field must not be empty"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_town($town)
	{
		// if the state is blank
  		if (!$town || empty($town) || $town == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Town field must not be empty"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_property_type($property_type)
	{
		// if the state is blank
  		if (!$property_type || empty($property_type) || $property_type == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Property type field must not be empty"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_agent_name($agent_name)
	{
		// if the agent_name is blank
  		if (!$agent_name || empty($agent_name) || $agent_name == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Agent name field must not be empty"
						);
		}
		elseif(strlen($agent_name) > 255)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agent name field must not be more than 255 characters"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_location($location)
	{
		// if the agent_name is blank
  		if (!$location || empty($location) || $location == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Location field must not be empty"
						);
		}
		elseif(strlen($location) > 255)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Location field must not be more than 255 characters"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_town2($town2)
	{
		// if the agent_name is blank
  		if (!$town2 || empty($town2) || $town2 == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Town field must not be empty"
						);
		}
		elseif(strlen($town2) < 3)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Town field must be at least 3 characters in length."
						);
		}
		elseif(strlen($town2) > 255)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Town field must not be more than 255 characters"
						);
		}
		//************************VALIDATE IS_UNIQUE*****************************************\\
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_property_type2($property_type2)
	{
		// if the agent_name is blank
  		if (!$property_type2 || empty($property_type2) || $property_type2 == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Property Type field must not be empty"
						);
		}
		elseif(strlen($property_type2) < 3)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Property Type field must be at least 3 characters in length."
						);
		}
		elseif(strlen($property_type2) > 255)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Property Type field must not be more than 255 characters"
						);
		}
		//************************VALIDATE IS_UNIQUE*****************************************\\
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_agent_address($agent_address)
	{
		// if the agent_name is blank
  		if (!$agent_address || empty($agent_address) || $agent_address == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Agents address field must not be empty"
						);
		}
		
		elseif(strlen($agent_address) < 10)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agents address field must be at least 10 characters in length."
						);
		}
		elseif(strlen($agent_address) > 255)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agents address field must not be more than 255 characters"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_agent_phone($agent_phone)
	{
		// if the agent_name is blank
  		if (!$agent_phone || empty($agent_phone) || $agent_phone == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Agents phone no. field must not be empty"
						);
		}
		elseif(!is_numeric($agent_phone))
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agents phone no. field must contain only numbers."
						);
		}
		elseif(strlen($agent_phone) < 11)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agents phone no. field must be at least 11 characters in length."
						);
		}
		elseif(strlen($agent_phone) > 15)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agents phone no. field must not be more than 15 characters"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_agent_email($agent_email)
	{
		
		
		if(! $this->valid_email($agent_email) && $agent_email != '')
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agents email field must contain a valid email address"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_agent_website($agent_website)
	{
		
		// if the agent_name is blank
  		if (!$agent_website || empty($agent_website) || $agent_website == '') 
		{
    		$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		elseif(! filter_var($agent_website, FILTER_VALIDATE_URL))
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Agents website field must contain a valid URL"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_comment($comment)
	{
		// if the agent_name is blank
  		if (!$comment || empty($comment) || $comment == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Description field must not be empty"
						);
		}
		elseif(strlen($comment) < 20)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Description field must be at least 20 characters in length."
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_price($price)
	{
		// if the agent_name is blank
  		if (!$price || empty($price) || $price == '') 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "Price field must not be empty"
						);
		}
		elseif(! is_numeric($price))
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Property price field must contain only numbers."
						);
		}
		elseif($price < 100)
		{
			$response = array(
      					'OK' => FALSE, 
      					'msg' => "The Property price field must contain a number greater than 100."
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	public function check_category($category)
	{
		// if the agent_name is blank
  		if (!($category == 'sale'|| $category == 'rent')) 
		{
    		$response = array(
      					'OK' => FALSE, 
      					'msg' => "You must check at least one category"
						);
		}
		else
		{
			$response = array(
      					'OK' => TRUE, 
      					'msg' => ""
						);
		}
		return $response;
	}
	//////////////////////////////////
}