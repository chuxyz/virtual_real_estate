<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	public $page_row = 2;
	public $page_range = 3;
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Africa/Lagos');
		$this->load->model('listing_model');
		$this->load->model('location_model');
		$this->load->model('gen_model');
		$this->load->library('func');
		$this->load->library('admin_lib', '', 'admin'); //load admin library
	}
	
	public function index()
	{
		$data['home'] = ' current';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$this->func->delete_expired_listing();
		
		if($this->input->post('search') == TRUE) // if search button is clicked...
		{
			$search_for = $this->input->post('keyword');
			if(empty($search_for) || $search_for == '' || $search_for == 'Search...')
			{
				redirect();
			}
			redirect('search/'.$search_for.'/1');
		}
		$view = 'index';
		$data['states'] = $this->location_model->list_states();
		$data['featured'] = $this->listing_model->get_featured('10'); //Get first 10 featured records
		$data['recents'] = $this->listing_model->get_recent('10'); //Get first 10 recent records
		$data['title'] = $this->site_name.' | Home';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$this->load->view($view, $data);
	}
	
	public function listing()
	{
		$data['home'] = '';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		if(! $this->admin->islogged())
		{
			redirect();
		}
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		
		/*var_dump($this->func->fixGlobalFilesArray($_FILES['image_file']));
		echo count($this->func->fixGlobalFilesArray($_FILES['image_file']));*/
		/*$data['town_select'] = '';
		$data['town_input'] = '';
		$data['prop_select'] = '';
		$data['prop_input'] = '';
		$data['town_check'] = '';
		$data['prop_check'] = '';*/
			if($this->input->post('list') == TRUE)
			{
				$this->form_validation->set_message('required', '%s field must not be empty');
				$this->form_validation->set_rules('state', 'State', 'required');
				if($this->input->post('check_town') == 'yes')
				{
					$this->form_validation->set_rules('town2', 'Town', 'required|min_length[3]|max_length[255]|strtoupper|is_unique[towns.town_name]');
					/*$data['town_input'] = 'display:inline-block !important;';
					$data['town_select'] = 'display:none !important;';
					$data['town_check'] = 'checked';*/
				}
				else
				{
					$this->form_validation->set_rules('town', 'Town', 'required');
					/*$data['town_select'] = 'display:inline-block !important;';
					$data['town_input'] = 'display:none !important;';*/
				}
				$this->form_validation->set_rules('location', 'Location', 'required|max_length[255]');
				if($this->input->post('check_prop') == 'yes')
				{
					$this->form_validation->set_rules('property_type2', 'Property Type', 'required|min_length[3]|strtoupper|is_unique[properties.prop_name]');
					/*$data['prop_input'] = 'display:inline-block !important;';*/
				}
				else
				{
					$this->form_validation->set_rules('property_type', 'Property Type', 'required');
					$data['prop_select'] = 'display:inline-block !important;';
				}
				$this->form_validation->set_rules('category', 'Category', 'callback_cat_checkbox');
				$this->form_validation->set_rules('a_name', 'Agent name', 'required|max_length[255]');
				$this->form_validation->set_rules('a_address', 'Agent address', 'required|min_length[10]|max_length[255]');
				$this->form_validation->set_rules('a_phone', 'Agents phone no.', 'required|numeric|min_length[11]|max_length[15]');
				$this->form_validation->set_rules('a_email', 'Agents email', 'valid_email');
				$this->form_validation->set_rules('a_website', 'Agents Website', 'prep_url');
				$this->form_validation->set_rules('comment', 'Description', 'required|min_length[20]');
				$this->form_validation->set_rules('ad_duration', 'Add duration', 'callback_duration_checkbox');
				$this->form_validation->set_rules('price', 'Property price', 'required|numeric|greater_than[100]');
				if ($this->form_validation->run() == FALSE)
				{
					$this->session->set_userdata('validation_msg', 'One or more error has occurred. Check messages next to the fields and make appropriate corrections');
					$files = $this->func->fixGlobalFilesArray($_FILES['image_file']); 
					if($files[0]['error'] == 4) //if image is not selected
					{
						$this->session->set_userdata('upload_msg', 'No file Selected. Select at least an image file');
						$upload = FALSE;
					}
				}
				else
				{
					$files = $this->func->fixGlobalFilesArray($_FILES['image_file']); 
					if($files[0]['error'] == 4) //if image is not selected
					{
						$this->session->set_userdata('upload_msg', 'No file Selected');
						$upload = FALSE;
					}
					else // a file is selected
					{
						$coin = 0;
						foreach($files as $file) //loop through all uploaded files
						{
							$type = $file['type'];
							$tmp_name = $file["tmp_name"];
							$e_name = $this->func->encrypt_file_name($file["name"]);
							$ext = pathinfo($file["name"], PATHINFO_EXTENSION); // get file extension
							$path = 'images/property-images/uploaded/'.$e_name.'.'.$ext;
							if ($type == "image/png" || $type == "image/gif" || $type == "image/jpeg"|| $type == "image/pjpeg")//valid image MIME type
							{
								move_uploaded_file($tmp_name, $path);
								if($coin == 0) $url = $path;
								else $url = $path.' , '.$url;
								$upload = TRUE;
							}
							else
							{
								$this->session->set_userdata('upload_msg', 'Invalid file type');
								$upload = FALSE;	
							}
							$coin++;
						}
					}
					if($upload) //if upload was done successfully, get all values and add new records to listings table
					{
						$img_path = $url;
						$state_id = $this->input->post('state');
						if($this->input->post('check_town') == 'yes')
						{
							$town_name = trim($this->input->post('town2'));
							$this->gen_model->insert('towns',array('state_id'=>$state_id,'town_name'=>$town_name));
							$tid = $this->location_model->get_town_id($town_name);
							$town_id = $tid[0]->town_id;
						}
						else
						{
							$town_id = $this->input->post('town');
						}
						$location = $this->input->post('location');
						if($this->input->post('check_prop') == 'yes')// if user wants to add a property value
						{
							$prop_name = trim($this->input->post('property_type2')); //get property value
							$this->gen_model->insert('properties',array('prop_name'=>$prop_name)); //update record
							$pid = $this->location_model->get_prop_id($prop_name); //get record's id
							$prop_id = $pid[0]->prop_id;
						}
						else
						{
							$prop_id = $this->input->post('property_type');
						}
						$agent_name = $this->input->post('a_name');
						$agent_address = $this->input->post('a_address');
						$agent_phone = $this->input->post('a_phone');
						$agent_email = $this->input->post('a_email');
						$agent_website = $this->input->post('a_website');
						$agent_fb = $this->input->post('a_fb_id');
						$agent_twitter='';
						$comment = $this->input->post('comment');
						$ad_price = $this->input->post('ad_duration');
						$f_price = $this->input->post('featured');
						$prop_price = $this->input->post('price');
						$category = $this->input->post('category');
						$d = (int) $this->input->post('ad_duration');
						switch($d) //check advert_duration value and covert to no. of equivalent days
						{
							case 5000: $days = 30;
							break;
							case 1000: $days = 91;
							break;
							case 18000: $days = 182;
							break;
							case 30000: $days = 365;
							break;
							default: $days = 0;
							break;
						}
						$ad_duration = $days * 24 * 60 * 60;
						$duration = time() + $ad_duration;
						if((int)$this->input->post('featured') == 200)// if featured is selected
						{
						$listing_data = array(
						'prop_id'=>$prop_id,
						'state_id'=>$state_id,
						'town_id'=>$town_id,
						'prop_address'=>$location,
						'agent_name'=>$agent_name,
						'agent_address'=>$agent_address,
						'phone'=>$agent_phone,
						'email'=>$agent_email,
						'website'=>$agent_website,
						'facebook'=>$agent_fb,
						'twitter'=>$agent_twitter,
						'comment'=>$comment,
						'duration'=>$duration,
						'price'=>$prop_price,
						'img_url'=>$url,
						'category'=>$category,
						'status'=>'featured',
						'time_added'=>time()
						);
						}
						else
						{
							$listing_data = array(
						'prop_id'=>$prop_id,
						'state_id'=>$state_id,
						'town_id'=>$town_id,
						'prop_address'=>$location,
						'agent_name'=>$agent_name,
						'agent_address'=>$agent_address,
						'phone'=>$agent_phone,
						'email'=>$agent_email,
						'website'=>$agent_website,
						'facebook'=>$agent_fb,
						'twitter'=>$agent_twitter,
						'comment'=>$comment,
						'duration'=>$duration,
						'price'=>$prop_price,
						'img_url'=>$url,
						'category'=>$category,
						'time_added'=>time()
						);
						}
						$this->gen_model->insert('listings',$listing_data);
						$insert_id = $this->gen_model->get_insert_id();
						$this->session->set_userdata('success_msg','You have succesfully added a new listing. <a href="'.base_url('property_details/'.$insert_id).'">View</a> now');
					}
				}
			}
		$view = 'listing';
		$data['title'] = $this->site_name.' | Listing';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$data['states'] = $this->location_model->list_states();
		$data['properties'] = $this->listing_model->get_properties();
		$this->load->view($view, $data);
	}
	
	//////////////////////////////
	public function cat_checkbox($str)
	{
		if ($str == ''||empty($str))
		{
			$this->form_validation->set_message('cat_checkbox', 'You must check at least one category');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	public function duration_checkbox($str)
	{
		if ($str == ''||empty($str))
		{
			$this->form_validation->set_message('duration_checkbox', 'You must check at least one advert duration');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	///////////////////////////////
	public function sale($town_id, $prop_id, $page)
	{
		$data['home'] = ' current';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'sale';
		$data['title'] = $this->site_name.' | For Sale';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$data['properties'] = $this->listing_model->get_properties();
		$data['sale_type_list'] = $this->listing_model->get_sale_property_type($town_id, $prop_id);
		$data['town_id'] = $town_id;
		$data['prop_id'] = $prop_id;
		/////////////////////////////////PAGINATION
		$numrows = count($data['sale_type_list']);
		// number of rows to show per page
		$rowsperpage = $this->page_row;
		// find out total pages
		$data['totalpages'] = ceil($numrows / $rowsperpage);
		
		// get the current page or set a default
		if (!is_numeric($page))
		{
		   // cast var as int
		   $data['page'] = (int) $page;
		}
		else 
		{
		   // default page num
		   $data['page'] = 1;
		} // end if
		
		// if current page is greater than total pages...
		if ($data['page'] > $data['totalpages']) 
		{
		   // set current page to last page
		   $data['page'] = $data['totalpages'];
		} // end if
		// if current page is less than first page...
		if ($data['page'] < 1) 
		{
		   // set current page to first page
		   $data['page'] = 1;
		} // end if
		
		// the offset of the list, based on current page 
		$offset = ($data['page'] - 1) * $rowsperpage;
		$data['sale_type_list_limit'] = $this->listing_model->get_sale_property_type_limit($town_id, $prop_id, $offset, $rowsperpage);
		// range of num links to show
		$data['range'] = $this->page_range;
		//////////////////////////////////
		$this->session->set_userdata('url',current_url());
		$this->load->view($view, $data);
	}
	public function rent($town_id, $prop_id, $page)
	{
		$data['home'] = ' current';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'rent';
		$data['title'] = $this->site_name.' | For Rent';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$data['properties'] = $this->listing_model->get_properties();
		$data['rent_type_list'] = $this->listing_model->get_rent_property_type($town_id, $prop_id);
		$data['town_id'] = $town_id;
		$data['prop_id'] = $prop_id;
		/////////////////////////////////PAGINATION
		$numrows = count($data['rent_type_list']);
		// number of rows to show per page
		$rowsperpage = $this->page_row;
		// find out total pages
		$data['totalpages'] = ceil($numrows / $rowsperpage);
		
		// get the current page or set a default
		if (is_numeric($page) && $page > 0)
		{
		   // cast var as int
		   $data['page'] = (int) $page;
		}
		else 
		{
		   // default page num
		   $data['page'] = 1;
		} // end if
		
		// if current page is greater than total pages...
		if ($data['page'] > $data['totalpages']) 
		{
		   // set current page to last page
		   $data['page'] = $data['totalpages'];
		} // end if
		// if current page is less than first page...
		if ($data['page'] < 1) 
		{
		   // set current page to first page
		   $data['page'] = 1;
		} // end if
		
		// the offset of the list, based on current page 
		$offset = ($data['page'] - 1) * $rowsperpage;
		$data['rent_type_list_limit'] = $this->listing_model->get_rent_property_type_limit($town_id, $prop_id, $offset, $rowsperpage);
		// range of num links to show
		$data['range'] = $this->page_range;
		//////////////////////////////////
		$this->session->set_userdata('url',current_url());
		$this->load->view($view, $data);
	}
	/*public function property_type($town_id, $prop_id)
	{
		$p_name = $this->listing_model->get_prop_name($prop_id);
		$prop_name = ucwords(strtolower($p_name[0]->prop_name));
		$view = 'property_type';
		$data['title'] = $this->site_name.' | '.$prop_name.' List';
		$data['properties'] = $this->listing_model->get_properties();
		$data['all_type_list'] = $this->listing_model->get_all_property_type($town_id, $prop_id);
		$data['town_id'] = $town_id;
		$data['prop_id'] = $prop_id;
		$this->load->view($view, $data);
	}*/
	public function property_details($list_id)
	{
		$data['home'] = ' current';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'property_details';
		$data['title'] = $this->site_name.' | Details';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$data['list'] = $this->listing_model->get_list_details($list_id);
		$data['properties'] = $this->listing_model->get_properties();
		$vw = $data['list'][0]->views + 1; //increment views
		$this->gen_model->update('listings',array('views'=>$vw), array('list_id'=> $data['list'][0]->list_id));//update views
		$data['list'] = $this->listing_model->get_list_details($list_id);
		$this->load->view($view, $data);
	}

	public function search($keyword = '', $page = 1)
	{
		$data['home'] = '';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'search';
		if($keyword == '' || $page < 1)
		{
			$this->show_404();
		}
		$data['title'] = $this->site_name.' | Search Result';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$data['states'] = $this->location_model->list_states();
		$data['search_result'] = $this->listing_model->search($keyword);
		$data['keyword'] = $keyword;
		/////////////////////////////////PAGINATION
		$numrows = count($data['search_result']);
		// number of rows to show per page
		$rowsperpage = $this->page_row;
		// find out total pages
		$data['totalpages'] = ceil($numrows / $rowsperpage);
		
		// get the current page or set a default
		if (is_numeric($page) && $page > 0)
		{
		   // cast var as int
		   $data['page'] = (int) $page;
		}
		else 
		{
		   // default page num
		   $data['page'] = 1;
		} // end if
		
		// if current page is greater than total pages...
		if ($data['page'] > $data['totalpages']) 
		{
		   // set current page to last page
		   $data['page'] = $data['totalpages'];
		} // end if
		// if current page is less than first page...
		if ($data['page'] < 1) 
		{
		   // set current page to first page
		   $data['page'] = 1;
		} // end if
		
		// the offset of the list, based on current page 
		$offset = ($data['page'] - 1) * $rowsperpage;
		$data['search_result_limit'] = $this->listing_model->search_limit($keyword, $offset, $rowsperpage);
		// range of num links to show
		$data['range'] = $this->page_range;
		//////////////////////////////////
		$this->session->set_userdata('url',current_url());
		$this->load->view($view, $data);
	}
	public function about()
	{
		$data['home'] = '';
		$data['about'] = ' class="current"';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'pages/about';
		$data['title'] = $this->site_name.' | About Us';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$this->load->view($view, $data);
	}
	public function featured($page = 1, $prop_id = NULL)
	{
		$data['home'] = '';
		$data['about'] = '';
		$data['feature'] = ' class="current"';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'featured';
		if($prop_id == NULL)
		{
			$data['featured'] = $this->listing_model->get_all_featured();
		}
		else
		{
			$data['featured'] = $this->listing_model->get_featured_prop_id($prop_id);
		}
		$data['properties'] = $this->listing_model->get_properties();
		$data['title'] = $this->site_name.' | Featured';
		$data['prop_id'] = $prop_id;
		
		/////////////////////////////////PAGINATION
		$numrows = count($data['featured']);
		// number of rows to show per page
		$rowsperpage = $this->page_row;
		// find out total pages
		$data['totalpages'] = ceil($numrows / $rowsperpage);
		
		// get the current page or set a default
		if (is_numeric($page) && $page > 0)
		{
		   // cast var as int
		   $data['page'] = (int) $page;
		}
		else 
		{
		   // default page num
		   $data['page'] = 1;
		} // end if
		
		// if current page is greater than total pages...
		if ($data['page'] > $data['totalpages']) 
		{
		   // set current page to last page
		   $data['page'] = $data['totalpages'];
		} // end if
		// if current page is less than first page...
		if ($data['page'] < 1) 
		{
		   // set current page to first page
		   $data['page'] = 1;
		} // end if
		
		// the offset of the list, based on current page 
		$offset = ($data['page'] - 1) * $rowsperpage;
		if($prop_id == NULL)
		{
			$data['featured_limit'] = $this->listing_model->get_limit_featured($offset, $rowsperpage);
		}
		else
		{
			$data['featured_limit'] = $this->listing_model->get_limit_featured_prop_id($prop_id, $offset, $rowsperpage);
		}
		// range of num links to show
		$data['range'] = $this->page_range;
		//////////////////////////////////
		
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		
		$this->load->view($view, $data);
	}
	public function contact()
	{
		$data['home'] = '';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = ' class="current"';
		$data['help'] = '';
		$view = 'pages/contact';
		$this->load->library('form_validation');
		if($this->input->post('contact') == TRUE)
		{
			$name = $this->input->post('name');
			$mail_to = 'info@virtualestate.com.ng';
			$email = $this->input->post('email');
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			$subject = strtoupper($this->input->post('subject'));
			$message = $this->input->post('message');
			$this->form_validation->set_rules('name', 'Name', 'required|max_length[255]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[255]');
			$this->form_validation->set_rules('subject', 'Subject', 'required|min_length[3]|max_length[255]');
			$this->form_validation->set_rules('message', 'Message', 'required|min_length[20]');
			if($this->form_validation->run() == FALSE)
			{
			}
			else
			{
				$send_mail = @mail($mail_to, "Subject: $subject", $message, "From: $email" );
				if($send_mail)
				{
				$this->session->set_userdata('success_msg', 'Your mail was sent succesfully');
				}
	
			}
		}
		$data['title'] = $this->site_name.' | Contact Us';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$this->load->view($view, $data);
	}
	public function help()
	{
		$data['home'] = '';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = ' current';
		$view = 'pages/help';
		$this->load->library('form_validation');
		if($this->input->post('contact') == TRUE)
		{
			$name = $this->input->post('name');
			$mail_to = 'techie@virtualestate.com.ng';
			$email = $this->input->post('email');
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			$subject = strtoupper($this->input->post('subject'));
			$message = $this->input->post('message');
			$this->form_validation->set_rules('name', 'Name', 'required|max_length[255]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[255]');
			$this->form_validation->set_rules('subject', 'Subject', 'required|min_length[3]|max_length[255]');
			$this->form_validation->set_rules('message', 'Message', 'required|min_length[20]');
			if($this->form_validation->run() == FALSE)
			{
			}
			else
			{
				$send_mail = @mail($mail_to, "Subject: $subject", $message, "From: $email" );
				if($send_mail)
				{
				$this->session->set_userdata('success_msg', 'Your mail was sent succesfully');
				}
	
			}
		}
		$data['title'] = $this->site_name.' | Help';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$this->load->view($view, $data);
	}
	public function show_404()
	{
		$data['home'] = '';
		$data['about'] = '';
		$data['feature'] = '';
		$data['contact'] = '';
		$data['help'] = '';
		$view = 'show_404';
		$data['title'] = $this->site_name.' | Page Not Found!';
		$data['header'] = $this->header;
		$data['footer'] = $this->footer;
		$this->load->view($view, $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */