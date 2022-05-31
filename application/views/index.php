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
  <!--[if IE ]> 
  <link rel="stylesheet" type="text/css" href="css/ie.css">
  <![endif]-->
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
  <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="js/jniceit.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('form.NiceIt').NiceIt();
    });
  </script>
  <!-- Price Slider JS
    ================================================== -->
  <script type="text/javascript" src="js/jshashtable-2.1_src.js"></script>
  <script type="text/javascript" src="js/jquery.numberformatter-1.2.3.js"></script>
  <script type="text/javascript" src="js/tmpl.js"></script>
  <script type="text/javascript" src="js/jquery.dependClass-0.1.js"></script>
  <script type="text/javascript" src="js/draggable-0.1.js"></script>
  <script type="text/javascript" src="js/jquery.slider.js"></script>
  <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
  <script type="text/javascript" src="js/jcarousel-slider.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Start HEADER
    ========================== -->
	<?php
	$this->load->view($header);
	?>
    </div>
	</div>
	<!-- #End HEADER -->
	<!-- Start SEARCH & SLIDER
    ========================== -->
    <div id="search-slider" class="clearfix">
    	<!-- Start SEARCH
    	========================== -->
    	
    	<!-- Start SLIDER
    	========================== -->
      
        
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
          
        </script>
    </div>
    <!-- Start CONTENT
    ========================== -->
    <div id="container">
    <div class="slider">
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
  		<script type="text/javascript" src="js/jcarousel-slider0.js"></script>
          <div class="slider-wrapper theme-default" style="position:relative;">
          <div class="jcarousel0 carousels clearfix jcarousel-skin-tangos">
            <ul class="mycarousels jcarousel-skin-tangos">
            
                <li><img src="images/slider-images/1.jpg" width="770" alt="" title="#htmlcaption1" />
                <div class="caption_wrapper">
                 <div class="prevNav"></div>
                <div class="nextNav"></div>
                <div id="htmlcaption1" class="nivo-html-caption">           
              <h2>Luxury home in downtown</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <span class="da-price">$29.599<sup>00</sup></span></p>
              
              <a href="<?php echo base_url('about') ?>" class="da-link">Read more</a>
            </div>
            </div>
                </li>
                
                <li><img src="images/slider-images/2.jpg" width="770" alt="" title="#htmlcaption2" />
                <div class="caption_wrapper">
                 <div class="prevNav"></div>
                <div class="nextNav"></div>
                <div id="htmlcaption1" class="nivo-html-caption">           
              <h2>Luxury home in downtown</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <span class="da-price">$29.599<sup>00</sup></span></p>
              
              <a href="<?php echo base_url('about') ?>" class="da-link">Read more</a>
            </div>
            </div>
                </li>
          </ul>
          </div>
        </div>
    </div>
        <!--=============================SLIDERS=======================-->
    <div class="listing_wrapper">
    
    <div class="latest-transactions">
    		<div class="latest-title featured"><p>Featured Properties</p></div>
            <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
  		<script type="text/javascript" src="js/jcarousel-slider1.js"></script>
          <div class="jcarousel carousels clearfix jcarousel-skin-tangos">
            <ul class="mycarousels jcarousel-skin-tangos">
            <?php
			foreach($featured as $ft)
			{
				if($ft->category == 'sale')
				{
					$cat = 'For Sale';
				}
				else
				{
					$cat = 'For Rent';
				}
				$imgs = explode(',',$ft->img_url);
              echo '<li>
                <div class="jcarousel-date-content clearfix">
   							  <div class="l-image">
   								  <img src="'.base_url($imgs[0]).'" alt="" title="" height="166" width="274" />
   								  <div class="l-image-hover">
   									  <a href="'.base_url($imgs[0]).'" class="l-lupa"><!-- --></a>
   								  </div>
   							  </div>
   							  <div class="l-shadow"><!-- --></div>
   							  <div class="l-title"><a href="'.base_url('property_details/'.$ft->list_id).'">'.$ft->prop_address.'</a></div>
   							  <div class="l-features clearfix">
   								  
   								
   								  <div class="l-pic">'.count($imgs).' Pictures</div>
   								  <div class="l-type">'.$cat.'</div>
   							  </div>
   							  <div class="l-details clearfix">
   								  <div class="l-price">₦'.number_format($ft->price).'</div>
   								  <div class="l-view"><a href="'.base_url('property_details/'.$ft->list_id).'">View details</a></div>
   							  </div>
                </div>
              </li>';
			}
			  ?>
            </ul>
            
          </div>
          			<div class="jcarousel-control-prev"></div>
                <div class="jcarousel-control-next"></div>
          </div>
          
        
    </div>
    <!--=========================NEWLYLISTED PROPERTIES ===========================-->
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
  		<script type="text/javascript" src="js/jcarousel-slider2.js"></script>
        <div class="listing_wrapper">
        <div class="latest-transactions">
    		<div class="latest-title newly"><p>Newly Listed Properties</p></div>
          <div class="jcarousel2 carousels clearfix jcarousel-skin-tangos">
            <ul class="mycarousels jcarousel-skin-tangos">
            <?php
			foreach($recents as $rt)
			{
				if($rt->category == 'sale')
				{
					$cat = 'For Sale';
				}
				else
				{
					$cat = 'For Rent';
				}
				$imgs = explode(',',$rt->img_url);
              echo '<li>
                <div class="jcarousel-date-content clearfix">
   							  <div class="l-image">
   								  <img src="'.base_url($imgs[0]).'" alt="" title="" height="166" width="274" />
   								  <div class="l-image-hover">
   									  <a href="'.base_url($imgs[0]).'" class="l-lupa"><!-- --></a>
   								  </div>
   							  </div>
   							  <div class="l-shadow"><!-- --></div>
   							  <div class="l-title"><a href="'.base_url('property_details/'.$rt->list_id).'">'.$rt->prop_address.'</a></div>
   							  <div class="l-features clearfix">
   								  
   								
   								  <div class="l-pic">'.count($imgs).' Pictures</div>
   								  <div class="l-type">'.$cat.'</div>
   							  </div>
   							  <div class="l-details clearfix">
   								  <div class="l-price">₦'.number_format($rt->price).'</div>
   								  <div class="l-view"><a href="'.base_url('property_details/'.$rt->list_id).'">View details</a></div>
   							  </div>
                </div>
              </li>';
			}
			  ?>
            </ul>
            
          </div>
          		<div class="jcarousel-control-prev2"></div>
                <div class="jcarousel-control-next2"></div>
    	</div>
        </div>
        <!--=================================================================-->
    
    
    <div id="left_nav">
    <ul id="sort_tab">
    <li class="for_sale">For Sale
    <ul class="states_ul">
    <?php 
	foreach($states as $state)
	{
		$towns = $this->location_model->get_state_towns($state->state_id);
		echo '<li>'.$state->state_name;
		if(count($towns) > 0)
		{
			echo '<ul class="towns_ul">';
			foreach($towns as $town)
			{
				$listing = $this->listing_model->list_for_sale($state->state_id,$town->town_id);
				echo '<li>'.$town->town_name;
				if(count($listing) > 0)
				{
					$height = 27 + (count($listing) * 30);
					$height = $height.'px';
					echo '<div class="item_list_div" style="height:'.$height.' !important;">
    					<div class="caret_holder"><div class="pt_left_caret"></div></div>
    					<h3>Available Properties in '.ucwords(strtolower($town->town_name)).'</h3>
     					<ul class="item_list">';
					foreach($listing as $list)
					{
						$prop = $this->location_model->get_property_name($list->prop_id);
						echo '<li><a href="'.base_url('sale/'.$town->town_id.'/'.$list->prop_id.'/1').'">'.$prop[0]->prop_name.'</a></li>';
					}
					echo 	'</ul>
    						</div>';
				}
				echo '</li>';
			}
			echo '</ul>';
		}
		echo '</li>';
	}
	?>
    </ul>
    </li>
    <li class="for_rent">For Rent
    <ul class="states_ul" style="display:none;">
    <?php 
	foreach($states as $state)
	{
		$towns = $this->location_model->get_state_towns($state->state_id);
		echo '<li>'.$state->state_name;
		if(count($towns) > 0)
		{
			echo '<ul class="towns_ul">';
			foreach($towns as $town)
			{
				$listing = $this->listing_model->list_for_rent($state->state_id,$town->town_id);
				echo '<li>'.$town->town_name;
				if(count($listing) > 0)
				{
					$height = 27 + (count($listing) * 30);
					$height = $height.'px';
					echo '<div class="item_list_div" style="height:'.$height.' !important;">
    					<div class="caret_holder"><div class="pt_left_caret"></div></div>
    					<h3>Available Properties in '.ucwords(strtolower($town->town_name)).'</h3>
     					<ul class="item_list">';
					foreach($listing as $list)
					{
						$prop = $this->location_model->get_property_name($list->prop_id);
						echo '<li><a href="'.base_url('rent/'.$town->town_id.'/'.$list->prop_id.'/1').'">'.$prop[0]->prop_name.'</a></li>';
					}
					echo 	'</ul>
    						</div>';
				}
				echo '</li>';
			}
			echo '</ul>';
		}
		echo '</li>';
	}
	?>
    </ul>
    </li>
    </ul>
    </div>
    
    </div>
    <div id="content">
      
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <?php
	  $this->load->view($footer);
	  ?>
</body>
</html>