<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if lte IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie9" lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  	================================================== -->
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
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
	<!--<div id="top">
		<div class="top clearfix">
			<div class="float-right"><a href="login.html" class="account">My account</a>&nbsp;|&nbsp;<a href="register.html" class="register">Register</a>&nbsp;|&nbsp;<a href="help.html" class="help">Help</a></div>
		</div>
	</div>-->
	<!-- Start HEADER
    ========================== -->
	<div id="header">
    <!--search -->
          <form action="<?php echo base_url(); ?>" enctype="multipart/form-data" method="post" class="search clearfix">
            <input type="text" name="keyword" placeholder="Search..." value="Search..." onClick="value=''" class="search-input" />
            <input type="submit" name="search" value=" " class="submit-input" />
          </form>
          <!-- #End-->
		<div class="logo-social clearfix">
			<a href="index.html" class="logo"><!-- --></a>
			<div class="social">
				<a href="#" class="twitter"></a>
				<a href="#" class="facebook"></a>
				<a href="#" class="digg"></a>
				<a href="#" class="vimeo"></a>
				<a href="#" class="youtube"></a>
				<a href="#" class="skype"></a>
			</div>
		</div>
		<!-- Start MAIN MENU
    	========================== -->
		<div class="main-menu">    
      <nav id="main-nav">
       	<ul>
          <li class="home current indicator"><div class="first"><!-- --></div><a href="#">Home</a> <p><a href="#">page</a></p>
            <ul class="submenu">
              <li class="current"><a href="index.html">Home page</a></li>
              <li><a href="index1.html">Home v2</a></li>
              <li><a href="index2.html" class="last">Home with full screen slider</a></li>
            </ul>
          </li>
					<li><a href="about-us.html">About</a> <p><a href="about-us.html">company</a></p></li>
					<li><a href="category-grid.html">Buying</a> <p><a href="category-grid.html">offers</a></p></li>
					<li><a href="category-list.html">Selling</a> <p><a href="category-list.html">offers</a></p></li>
					<li class="indicator"><a href="#">Renting</a> <p><a href="#">offers</a></p>
						<ul class="submenu">
              <li><a href="property-details.html" class="last">Property details</a></li>
            </ul>
					</li>
					<li class="indicator"><a href="#">Blog</a> <p><a href="#">articles</a></p>
						<ul class="submenu">
              <li><a href="blog.html">Blog</a></li>
              <li><a href="blog-post.html" class="last">Blog post</a></li>
            </ul>
					</li>
					<li class="last"><a href="contact-us.html">Contact</a> <p><a href="contact-us.html">details</a></p></li>
        </ul>
        <?php
		if($this->session->userdata('admin_name') == TRUE)
		{
		?>
        <div class="top">
        <div class="top">
        <div class="float-right" style="position:absolute; right:0px;"><a href="<?php echo base_url('adminlogin/logout'); ?>" class="account">Logout</a>|<a href="<?php echo base_url('listing'); ?>" class="register">Register</a><!--|<a href="help.html" class="help">Help</a>--></div>
        </div></div>
        <?php
		}
		?>
      </nav>
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
          <div class="slider-wrapper theme-default">
          <div class="jcarousel0 carousels clearfix jcarousel-skin-tangos">
            <ul class="mycarousels jcarousel-skin-tangos">
            
                <li><img src="images/slider-images/1.jpg" width="770" alt="" title="#htmlcaption1" /></li>
                
                <li><img src="images/slider-images/2.jpg" width="770" alt="" title="#htmlcaption2" /></li>
          </ul>
          </div>
        </div>
    </div>
        <!--=============================SLIDERS=======================-->
    <div class="listing_wrapper">
    
    <div class="latest-transactions">
    		<div class="latest-title featured"><p>Featured Properties</p></div>
          <div class="jcarousel carousels clearfix jcarousel-skin-tangos">
          <!----NAV BUTTONS            <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div>
			<div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div><!----NAV BUTTONS -->
            <ul class="mycarousels jcarousel-skin-tangos">
              <li>
                <div class="jcarousel-date-content clearfix">
   							  <div class="l-image">
   								  <img src="images/property-images/1.jpg" alt="" title="" />
   								  <div class="l-image-hover">
   									  <a href="#" class="l-lupa"><!-- --></a>
   									  <a href="#" class="l-link"><!-- --></a>
   								  </div>
   							  </div>
   							  <div class="l-shadow"><!-- --></div>
   							  <div class="l-title"><a href="property-details.html">180 Campbell Parade, Bondi Beach</a></div>
   							  <div class="l-features clearfix">
   								  
   								
   								  <div class="l-pic">4 Pictures</div>
   								  <div class="l-type">For Sale</div>
   							  </div>
   							  <div class="l-details clearfix">
   								  <div class="l-price">$1,045,500</div>
   								  <div class="l-view"><a href="property-details.html">View details</a></div>
   							  </div>
                </div>
              </li>
              <li>
                <div class="jcarousel-date-content clearfix">
   								<div class="l-image">
   									<img src="images/property-images/2.jpg" alt="" title="" />
   									<div class="l-image-hover">
   										<a href="#" class="l-lupa"><!-- --></a>
   										<a href="#" class="l-link"><!-- --></a>
   									</div>
   								</div>
   								<div class="l-shadow"><!-- --></div>
   								<div class="l-title"><a href="property-details.html">356 GEORGE ST, Waterloo, NSW 2017</a></div>
   								<div class="l-features clearfix">
   									
   									
   									<div class="l-pic">2 Pictures</div>
   									<div class="l-type">For Rent</div>
   								</div>
   								<div class="l-details clearfix">
   									<div class="l-price">$1,499</div>
   									<div class="l-view"><a href="property-details.html">View details</a></div>
   								</div>
                </div>
              </li>
              <li>
                <div class="jcarousel-date-content clearfix">
    							<div class="l-image">
   									<img src="images/property-images/3.jpg" alt="" title="" />
   									<div class="l-image-hover">
   										<a href="#" class="l-lupa"><!-- --></a>
   										<a href="#" class="l-link"><!-- --></a>
   									</div>
   								</div>
   								<div class="l-shadow"><!-- --></div>
 								  <div class="l-title"><a href="property-details.html">Brodie Avenue, Little Bay</a></div>
 								  <div class="l-features clearfix">
   									
   								
   									<div class="l-pic">1 Pictures</div>
   									<div class="l-type">For Sale</div>
   								</div>
   								<div class="l-details clearfix">
   									<div class="l-price">$340,999</div>
   									<div class="l-view"><a href="property-details.html">View details</a></div>
   								</div>
                </div>
              </li>
              <li>
                <div class="jcarousel-date-content clearfix">
   								<div class="l-image">
   									<img src="images/property-images/1.jpg" alt="" title="" />
   									<div class="l-image-hover">
   										<a href="#" class="l-lupa"><!-- --></a>
   										<a href="#" class="l-link"><!-- --></a>
   									</div>
   								</div>
   								<div class="l-shadow"><!-- --></div>
   								<div class="l-title"><a href="property-details.html">180 Campbell Parade, Bondi Beach</a></div>
   								<div class="l-features clearfix">
   									
   								
   									<div class="l-pic">4 Pictures</div>
   									<div class="l-type">For Sale</div>
   								</div>
   								<div class="l-details clearfix">
   									<div class="l-price">$1,045,500</div>
   									<div class="l-view"><a href="property-details.html">View details</a></div>
   								</div>
                </div>
              </li>
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
          <!----NAV BUTTONS             <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div>
			<div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div><!----NAV BUTTONS -->
            <ul class="mycarousels jcarousel-skin-tangos">
              <li>
                <div class="jcarousel-date-content clearfix">
   							  <div class="l-image">
   								  <img src="images/property-images/1.jpg" alt="" title="" />
   								  <div class="l-image-hover">
   									  <a href="#" class="l-lupa"><!-- --></a>
   									  <a href="#" class="l-link"><!-- --></a>
   								  </div>
   							  </div>
   							  <div class="l-shadow"><!-- --></div>
   							  <div class="l-title"><a href="property-details.html">180 Campbell Parade, Bondi Beach</a></div>
   							  <div class="l-features clearfix">
   								  
   								
   								  <div class="l-pic">4 Pictures</div>
   								  <div class="l-type">For Sale</div>
   							  </div>
   							  <div class="l-details clearfix">
   								  <div class="l-price">$1,045,500</div>
   								  <div class="l-view"><a href="property-details.html">View details</a></div>
   							  </div>
                </div>
              </li>
              <li>
                <div class="jcarousel-date-content clearfix">
   								<div class="l-image">
   									<img src="images/property-images/2.jpg" alt="" title="" />
   									<div class="l-image-hover">
   										<a href="#" class="l-lupa"><!-- --></a>
   										<a href="#" class="l-link"><!-- --></a>
   									</div>
   								</div>
   								<div class="l-shadow"><!-- --></div>
   								<div class="l-title"><a href="property-details.html">356 GEORGE ST, Waterloo, NSW 2017</a></div>
   								<div class="l-features clearfix">
   									
   								
   									<div class="l-pic">2 Pictures</div>
   									<div class="l-type">For Rent</div>
   								</div>
   								<div class="l-details clearfix">
   									<div class="l-price">$1,499</div>
   									<div class="l-view"><a href="property-details.html">View details</a></div>
   								</div>
                </div>
              </li>
              <li>
                <div class="jcarousel-date-content clearfix">
    							<div class="l-image">
   									<img src="images/property-images/3.jpg" alt="" title="" />
   									<div class="l-image-hover">
   										<a href="#" class="l-lupa"><!-- --></a>
   										<a href="#" class="l-link"><!-- --></a>
   									</div>
   								</div>
   								<div class="l-shadow"><!-- --></div>
 								  <div class="l-title"><a href="property-details.html">Brodie Avenue, Little Bay</a></div>
 								  <div class="l-features clearfix">
   									
   								
   									<div class="l-pic">1 Pictures</div>
   									<div class="l-type">For Sale</div>
   								</div>
   								<div class="l-details clearfix">
   									<div class="l-price">$340,999</div>
   									<div class="l-view"><a href="property-details.html">View details</a></div>
   								</div>
                </div>
              </li>
              <li>
                <div class="jcarousel-date-content clearfix">
   								<div class="l-image">
   									<img src="images/property-images/1.jpg" alt="" title="" />
   									<div class="l-image-hover">
   										<a href="#" class="l-lupa"><!-- --></a>
   										<a href="#" class="l-link"><!-- --></a>
   									</div>
   								</div>
   								<div class="l-shadow"><!-- --></div>
   								<div class="l-title"><a href="property-details.html">180 Campbell Parade, Bondi Beach</a></div>
   								<div class="l-features clearfix">
   								
   									
   									<div class="l-pic">4 Pictures</div>
   									<div class="l-type">For Sale</div>
   								</div>
   								<div class="l-details clearfix">
   									<div class="l-price">$1,045,500</div>
   									<div class="l-view"><a href="property-details.html">View details</a></div>
   								</div>
                </div>
              </li>
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
    
    	<!-- Start LATEST TRANSACTIONS
    	========================================== -->
    	
      <!-- Start SECOND ROW
      ========================================== -->
      
      <!-- Start LAST HOUR PROPERTIES
      ========================================== -->
      
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <div class="social-footer clearfix">
        <div class="col float-left">
          <h2><span>Recent blog posts</span></h2>
          <div class="content">
            <div class="post clearfix">
              <div class="image float-left"><a href="#"><img src="images/posts/1.jpg" alt="" title="" /></a></div>
              <div class="post-det float-left">
                <a href="#"><span>Lorem ipsum dolor</span> consectetur adipiscing elit. Etiam</a>
                <p>November 7, 2012</p>
              </div>
            </div>
            <div class="post last clearfix">
              <div class="image float-left"><a href="#"><img src="images/posts/2.jpg" alt="" title="" /></a></div>
              <div class="post-det float-left">
                <a href="#"><span>Fermentum donec</span> ut rhoncus consectetur, diam dolor lacinia eros.</a>
                <p>November 4, 2012</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col float-left">
          <h2><span class="facebook">Facebook</span></h2>
          <div class="f-content">
            <div class="post">
              <div class="post-det">
                <a href="#"><span>Lorem ipsum dolor sit amet</span> consectetur adipiscing elit. Etiam egestas nulla sit amet.</a>
                <p>November 8, 2012</p>
              </div>
            </div>
            <div class="post last">
              <div class="post-det">
                <a href="#"><span>Fermentum donec gravida</span> nibh ut rhoncus consectetur, diam dolor lacinia eros.</a>
                <p>November 2, 2012</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col float-left">
          <h2><span class="twitter">Twitter</span></h2>
          <div class="t-content">
            <div class="post">
              <div class="post-det">
                <a href="#"><span>Lorem ipsum dolor sit</span> amet, consectetur adipiscing elit. Etiam egestas</a>
                <p>November 11, 2012</p>
              </div>
            </div>
            <div class="post last">
              <div class="post-det">
                <a href="#"><span>Fermentum donec</span> gravida, nibh ut rhoncus consectetur, diam dolor lacinia eros egestas.</a>
                <p>November 5, 2012</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col float-left">
          <h2><span class="tv">As seen on tv</span></h2>
          <div class="t-content">
            
          </div>
        </div>
      </div>
    </div>
    <!-- Start FOOTER
    ========================================== -->
    <div id="footer">
      <div class="footer clearfix">
        <div class="address float-left">Your Company, 1850 Belgrad, Ulica Zarka Zrenjanin, 49680, Serbia</div>
        <div class="contact float-right">Call us at: 121-333-6299 or just e-mail us at: <a href="mailto:info@eduture.com">info@eduture.com</a></div>
      </div>
    </div>
    <!-- Start COPYRIGHT
    ========================================== -->
    <div id="copyright" class="clearfix">
      <div class="copyright float-left">© 2013 <span>Virtual Real Estate</span>. All rights reserved | Designed by <a href="http://www.eduture.com/" target="_blank">Eduture Technologies Limited</a></div>
      <div class="footer-menu float-right">
        <a href="index.html">Home</a> &nbsp; / &nbsp; <a href="about-us.html">About us</a> &nbsp; / &nbsp; <a href="category-grid.html">Buying</a> &nbsp; / &nbsp; <a href="category-list.html">Selling</a> &nbsp; / &nbsp; <a href="property-details.html">Renting</a> &nbsp; / &nbsp; <a href="blog.html">Blog</a> &nbsp; / &nbsp; <a href="testimonials.html">Testimonials</a> &nbsp; / &nbsp; <a href="contact-us.html">Contact</a>
      </div>
    </div>
</body>
</html>