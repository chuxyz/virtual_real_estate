<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if lte IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie9" lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  	================================================== -->
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="Rent and sale of Properties properties, houses &amp; estates online">
	<meta name="author" content="Eduture Technologies">
    <meta name="keywords" content="Virtual estate, Eduture, Technology, En Route Fruition Nigeria Limited, Sale, Rent, Houses, estates, agents in nigeria, house agents, cheap houses, bungalow, duplex, bedroom flat in nigeria" /> 
	<!-- CSS
  	================================================== -->
  <link rel="stylesheet" type="text/css" href="css/home-styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jniceit.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/slider.css">
  <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen">
  <!--[if IE ]> <![endif]-->
	<noscript>
		<link rel="stylesheet" type="text/css" href="css/nojs.css">
	</noscript>
    <!-- Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Favicon
	================================================== -->
	<link rel="shortcut icon" href="favicon.html" type="image/x-icon">
    <!-- JavaScript
    ================================================== -->
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="js/ajax_script.js"></script>
  <script type="text/javascript" src="js/jniceit.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('form.NiceIt').NiceIt();
    });
  </script>
</head>
<body>
	
	<!-- Start HEADER
    ========================== -->
	<?php
	$this->load->view($header);
	?>
    </div>
    <div class="breadcrumbs"><a href="<?php echo base_url(); ?>">Home</a> <span>Listing</span></div>
	</div>
	<!-- #End HEADER -->
	<!-- Start SEARCH & SLIDER
    ========================== -->
    <div id="search-slider" class="clearfix">
    	<!-- Start SEARCH
    	========================== -->
    	
    </div>
    <!-- Start CONTENT
    ========================== -->
    
<div id="content" style="margin-top:0px;">
    <h2><span class="page-title">Create Listing</span></h2>
    <div id="container" style="height:auto !important">
    <div id="listing_div">
    <div id="note"><span>All fields marked with <sup>*</sup> &nbsp;are compulsory</span></div>
    <?php
	if($this->session->userdata('success_msg') == TRUE)
	{
		echo '<div class="success_msg">'.$this->session->userdata('success_msg').'</div>';
		$this->session->unset_userdata('success_msg');
	}
	?>
    
      <form action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data" name="form1">
        <table border="1" class="listing_table">
          <tr>
            <td><label>State</label><sup>*</sup></td>
            <td><select name="state" id="state" class="input-text">
              <option value="">-- States --</option>
              <?php
			  foreach($states as $state)
			  {
				  echo '<option value="'.$state->state_id.'">'.$state->state_name.'</option>';
			  }
			  ?>
            </select></td>
            <td><?php echo form_error('state', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Town</label><sup>*</sup></td>
            <td><select name="town" id="town" class="input-text">
              <option value="">-- Town --</option>
            </select><input type="text" name="town2" placeholder="Town" value="<?php echo set_value('town2'); ?>" id="town2" class="input-text" style="display:none;"><input type="checkbox" name="check_town" id="check_town" value="yes" /><label>Not Listed</label></td>
            <td><?php echo form_error('town', '<div class="error">', '</div>'); ?><?php echo form_error('town2', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Property Location</label><sup>*</sup></td>
            <td><input type="text" name="location" placeholder="Location" value="<?php echo set_value('location'); ?>" id="location" class="input-text"></td>
            <td><?php echo form_error('location', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Type of property</label><sup>*</sup></td>
            <td><select name="property_type" id="property_type" class="input-text">
              <option value="">-- Select Property Type --</option>
              <?php
			  foreach($properties as $property)
			  {
				  echo '<option value="'.$property->prop_id.'">'.$property->prop_name.'</option>';
			  }
			  ?>
            </select><input type="text" name="property_type2" placeholder="Type of property" id="property_type2" class="input-text" style="display:none;"><input type="checkbox" name="check_prop" id="check_prop" value="yes" /><label>Not Listed</label></td>
            <td><?php echo form_error('property_type', '<div class="error">', '</div>'); ?><?php echo form_error('property_type2', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Category</label><sup>*</sup></td>
            <td><span class="radio_box"><input type="radio" name="category" value="sale" id="category_2" class="category"/>For Sale</span> 
<span class="radio_box"><input type="radio" name="category" value="rent" id="category_3" class="category">For Rent</span> </td>
            <td class="sr"><?php echo form_error('category', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Agent name</label><sup>*</sup></td>
            <td><input type="text" name="a_name" placeholder="Agent name" value="<?php echo set_value('a_name'); ?>" id="a_name" class="input-text"></td>
            <td><?php echo form_error('a_name', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Address</label><sup>*</sup></td>
            <td><input type="text" name="a_address" placeholder="Agent address" value="<?php echo set_value('a_address'); ?>" id="a_address" class="input-text"></td>
            <td><?php echo form_error('a_address', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Phone number</label><sup>*</sup></td>
            <td><input type="text" name="a_phone" placeholder="Agent's phone number" value="<?php echo set_value('a_phone'); ?>" id="a_phone" class="input-text"></td>
            <td><?php echo form_error('a_phone', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="a_email" placeholder="Agent's email address" value="<?php echo set_value('a_email'); ?>" id="a_email" class="input-text"></td>
            <td><?php echo form_error('a_email', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Website</label></td>
            <td><input type="text" name="a_website" placeholder="Agent's Website" value="<?php echo set_value('a_website'); ?>" id="a_website" class="input-text"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label>Facebook Page</label></td>
            <td><input type="text" name="a_fb_id" placeholder="Agent's facebook page URL"value="<?php echo set_value('a_fb_id'); ?>" id="a_fb_id" class="input-text"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label class="textarea_label">Comment about property<sup>*</sup></label></td>
            <td colspan="2"><textarea name="comment" id="comment" placeholder="Description of property" class="input-text"><?php echo set_value('comment'); ?></textarea><?php echo form_error('comment', '<div class="error txtarea">', '</div>'); ?></td>
            <!--<td>&nbsp;</td>-->
          </tr>
          <tr>
            <td><label>Duration of advert</label><sup>*</sup></td>
            <td colspan="2">
                <div class="prices" style="margin-left:7px;"><span class="radio_box2"><input type="radio" name="ad_duration" value="5000" class="ad_duration">
                1month</span><div class="p">₦5,000</div></div>
                <div class="prices"><span class="radio_box2"><input type="radio" name="ad_duration" value="10000" class="ad_duration">
                3months</span><div class="p">₦10,000</div></div>
                <div class="prices"><span class="radio_box2"><input type="radio" name="ad_duration" value="18000" class="ad_duration">
                6months</span><div class="p">₦18,000</div></div>
                <div class="prices"><span class="radio_box2"><input type="radio" name="ad_duration" value="30000" class="ad_duration">
                12months</span><div class="p">₦30,000</div></div>
                <?php echo form_error('ad_duration', '<div class="error d_err">', '</div>'); ?>
                <br/><br/><div class="prices featured" style="margin:0px 6px 10px 7px !important; display:none;"><span class="radio_box3" style="display:block;">
              <input type="radio" name="featured" value="200" id="featured" />
              Featured
            </span><div class="p"">₦200</div></div><div id="price_tag">₦200,000</div>
    			</td>
            <!--<td>&nbsp;</td>-->
          </tr>
          <tr>
            <td><label>Price of property (<strong>₦</strong>)</label><sup>*</sup></td>
            <td><input type="text" name="price" placeholder="Propety price" value="<?php echo set_value('comment'); ?>" id="price" class="input-text"></td>
            <td><?php echo form_error('price', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td><label>Upload Image(s)</label><sup>*</sup></td>
            <td class="files_td"><input type="file" name="image_file[]" id="image" class="button2" /><div id="click_add">Add</div><div id="click_remove">Remove</div></td>
            <td>
            <?php
	if($this->session->userdata('upload_msg') == TRUE)
	{
		echo '<div class="error">'.$this->session->userdata('upload_msg').'</div>';
		$this->session->unset_userdata('upload_msg');
	}
	?>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="list" id="list" value="Create Listing" class="button"></td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form>
      </div>
    </div>
      
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <div>
      <?php
	  $this->load->view($footer);
	  ?>
</body>
</html>