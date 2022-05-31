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
    <script type="text/javascript">
    jQuery(document).ready(function() {
		
		var carousel = jQuery('.mycarousels').jcarousel();
			$('.jcarousel-prev').jcarouselControl({
        target: '-=1',
		carousel: carousel
    	});

    		$('.jcarousel-next').jcarouselControl({
        target: '+=1',
		carousel: carousel
    	});
    });
    </script>
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
    <!-- Blog search -->
          <form action="#" enctype="multipart/form-data" method="post" class="search clearfix">
            <input type="text" name="keyword" value="Search in blog" class="search-input" />
            <input type="submit" name="submit" value="" class="submit-input" />
          </form>
          <!-- #End // Start blog categories -->
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
        <div class="top">
        <div class="top">
        <div class="float-right" style="position:absolute; right:0px;"><a href="login.html" class="account">My account</a>|<a href="<?php echo base_url('listing'); ?>" class="register">Register</a><!--|<a href="help.html" class="help">Help</a>--></div>
        </div></div>
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
          $(window).load(function() {
              $('#sliders').nivoSlider();
          });
        </script>
    </div>
    <!-- Start CONTENT
    ========================== -->
    <div id="container">
    <div class="slider">
          <div class="slider-wrapper theme-default">
            <div id="sliders" class="nivoSlider">
                <img src="images/slider-images/1.jpg" data-thumb="images/slider-images/1.jpg" alt="" title="#htmlcaption1" />
                <img src="images/slider-images/2.jpg" data-thumb="images/slider-images/2.jpg" alt="" title="#htmlcaption2" />
            </div>
            <div id="htmlcaption1" class="nivo-html-caption">
              <h2>Luxury home in downtown</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="da-price">$29.599<sup>00</sup></div>
              <a href="property-details.html" class="da-link">Read more</a>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption">
              <h2>Luxury home in downtown 2</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="da-price">$29.599<sup>00</sup></div>
              <a href="property-details.html" class="da-link">Read more</a>
            </div>
          </div>
        </div>
    <div class="listing_wrapper">
    
    <div class="latest-transactions">
    		<div class="latest-title"><p>Properties for sale</p></div>
          <div class="carousels clearfix jcarousel-skin-tangos">
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
   								  <div class="l-bedrooms">9 Bedrooms</div>
   								  <div class="l-area">2416 m<sup>2</sup></div>
   								  <div class="l-baths">4 Baths</div>
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
   									<div class="l-bedrooms">4 Bedrooms</div>
   									<div class="l-area">2416 m<sup>2</sup></div>
   									<div class="l-baths">2 Baths</div>
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
   									<div class="l-bedrooms">3 Bedrooms</div>
   									<div class="l-area">2416 m<sup>2</sup></div>
   									<div class="l-baths">1 Baths</div>
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
   									<div class="l-bedrooms">9 Bedrooms</div>
   									<div class="l-area">2416 m<sup>2</sup></div>
   									<div class="l-baths">4 Baths</div>
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
    	</div>
        
    </div>
    
    
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
					echo '<div class="item_list_div">
    					<div class="caret_holder"><div class="pt_left_caret"></div></div>
    					<h3>Items Available in Aba</h3>
     					<ul class="item_list" type="square">';
					foreach($listing as $list)
					{
						echo '<li><a href="">3 bedroom flat</a></li>';
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
    <li>Abia
    <ul class="towns_ul">
    <li>ABA
    <div class="item_list_div">
    <div class="caret_holder"><div class="pt_left_caret"></div></div>
    <h3>Items Available in Aba</h3>
     <ul class="item_list" type="square">
     <li><a href="">3 bedroom flat</a></li>
    </ul>
    </div>
    </li>
    <li>UMUAHIA
    <div class="item_list_div">
    <div class="caret_holder"><div class="pt_left_caret"></div></div>
    <h3>Items Available in Umuahia</h3>
    </div>
    </li>
    </ul>
    </li>
    <li>Adamawa</li>
    <li>Akwa Ibom</li>
    <li>Anambra</li>
    <li>Bauch</li>
    <li>Bayelsa</li>
    <li>Benue</li>
    <li>Bornu</li>
    <li>Cross River</li>
    <li>Delta</li>
    <li>Ebonyi</li>
    <li>Edo</li>
    <li>Ekiti</li>
    <li>Enugu</li>
    <li>FCT Abuja</li>
    <li>Gombe</li>
    <li>Imo</li>
    <li>Jigawa</li>
    <li>Kaduna</li>
    <li>Kano</li>
    <li>Katsina</li>
    <li>Kebi</li>
    <li>Kogi</li>
    <li>Kwara</li>
    <li>Lagos</li>
    <li>Nasarawa</li>
    <li>Niger</li>
    <li>Ogun</li>
    <li>Ondo</li>
    <li>Osun</li>
    <li>Oyo</li>
    <li>Plateau</li>
    <li>Rivers</li>
    <li>Sokoto</li>
    <li>Taraba</li>
    <li>Yobe</li>
    <li>Zamfara</li>
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