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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/home-styles.css'); ?>" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jniceit.css'); ?>" media="screen" />
	<noscript>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/nojs.css'); ?>" />
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
	<script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('js/modernizr.custom.28468.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/scripts.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jniceit.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('form.NiceIt').NiceIt();
		});
	</script>
	<!-- Price Slider JS
    ================================================== -->
  	<script type="text/javascript" src="<?php echo base_url('js/jshashtable-2.1_src.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.numberformatter-1.2.3.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/tmpl.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.dependClass-0.1.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/draggable-0.1.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.slider.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.jcarousel.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/ddaccordion.js'); ?>"></script>
  <script type="text/javascript">
    ddaccordion.init({
      headerclass: "expandable",
      contentclass: "categoryitems",
      revealtype: "click",
      mouseoverdelay: 200,
      collapseprev: true,
      defaultexpanded: [0],
      onemustopen: false,
      animatedefault: false,
      persiststate: true,
      toggleclass: ["", "openheader"],
      togglehtml: ["prefix", "", ""],
      animatespeed: "fast",
      oninit:function(headers, expandedindices){ 
      },
      onopenclose:function(header, index, state, isuseractivated){
      }
    })
		jQuery(document).ready(function() {
			jQuery('#mycarousels').jcarousel({
				wrap: 'circular'
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
    <?php
	$state = $this->location_model->get_state_from_town($town_id);
	$state_id = $state[0]->state_id;
	$state_nm = $this->location_model->get_state_name($state_id);
	$state_nm = ucwords(strtolower($state_nm[0]->state_name));
	$town_nm = $this->location_model->get_town_name($town_id);
	$town_nm = ucwords(strtolower($town_nm[0]->town_name));
	$prop_nm = $this->listing_model->get_prop_name($prop_id);
	$prop_nm = ucwords(strtolower($prop_nm[0]->prop_name));
	?>
    <div class="breadcrumbs"><a href="<?php echo base_url(); ?>">Home</a> <span>For Sale</span><a></a><span><?php echo $state_nm; ?></span><a></a><span><?php echo $town_nm; ?></span><a></a><span><?php echo $prop_nm; ?></span></div>
	</div>
	<!-- #End HEADER -->
    <!-- Start CONTENT
    ========================== -->
    <div id="content">
      <h2><span>Properties For Sale</span></h2>
      <div class="clearfix">
        <div id="left-side" class="float-left">
          <ul class="cat-menu">
            <li class="categoriess">Categories</li>
            <?php
			foreach($properties as $property)
			{
				$class = '';
				if($property->prop_id == $prop_id)
				{
					$class = ' class="active"';
				}
				echo '<li'.$class.'><a href="'.base_url('property_type/'.$town_id.'/'.$property->prop_id).'">'.ucwords(strtolower($property->prop_name)).'</a></li>';
			}
			?>
          </ul>
          <div class="cat-shadow"><!-- --></div>
          
          <div class="search-shadow"><!-- --></div>
        </div>
        <div id="right-side" class="float-left">
          <div class="top-navigation clearfix">
            <div class="float-left">
              <form action="#" enctype="multipart/form-data" method="post" class="fm NiceIt sort-by" style="position:relative">
                <select name="city" class="input-text" style="padding:3px;">
                  <option>Sort properties by</option>
                  <option value="">Name</option>
                  <option value="">Date asc</option>
                  <option value="">Date desc</option>
                  <option value="">Price asc</option>
                  <option value="">Price desc</option>
                </select>
                <input class="submit-input" type="submit" value="Go" name="submit" style="position:
                absolute; left:230px; top:7px; cursor:pointer;" />
              </form>
            </div>
            <div class="paginate float-right clearfix">
              <a href="#" class="older">Older</a>
              <a href="#" class="prev"></a>
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#" class="points">...</a>
              <a href="#">14</a>
              <a href="#" class="next"></a>
              <a href="#" class="newest">Newest</a>
            </div>
          </div>
          <div class="list-products clearfix">
          <?php
		  foreach($sale_type_list as $sale_type)
		  {
			$state_name = $this->location_model->get_state_name($sale_type->state_id);
			$state_name = ucwords(strtolower($state_name[0]->state_name));
			$town_name = $this->location_model->get_town_name($sale_type->town_id);
			$town_name = ucwords(strtolower($town_name[0]->town_name));
			$prop_name = $this->listing_model->get_prop_name($sale_type->prop_id);
			$prop_name = $prop_name[0]->prop_name;
            echo '<div class="product clearfix">
              <div class="l-new"><a href="#"><!-- --></a></div>
              <div class="l-image float-left">
                <img src="'.base_url('images/property-images/4.jpg').'" alt="" title="" />
                <div class="l-image-hover">
                  <a href="'.base_url('images/property-images/4.jpg').'" class="l-lupa"><!-- --></a>
                  <!--<a href="#" class="l-link"><!-- --></a>-->
                </div>
              </div>
              <div class="l-image-shadow float-left"><!-- --></div>
              <div class="l-description float-left">
                <div class="l-title"><a href="property-details.html">'.$sale_type->prop_address.'</a></div>
                <div class="l-city">Town: <span>'.$town_name.'</span><br/>State: <span>'.$state_name.'</span></div>
                <div class="l-desc">'.$this->func->short_details($sale_type->comment).'</div>
                <div class="l-features clearfix">
                  <div class="l-bedrooms">'.$prop_name.'</div>
                  <!--<div class="l-area">2416 m<sup>2</sup></div>-->
                  <!--<div class="l-baths">4 Baths</div>-->
                  <div class="l-pic">14 Pictures</div>
                </div>
              </div>
              <div class="l-details float-left">
                <div class="l-price">₦'.$sale_type->price.'</div>
                <a href="#" class="send-friend">Send to friend</a>
                <div class="l-view"><a href="'.base_url('property_details/'.$sale_type->list_id).'">View details</a></div>
              </div>           
            </div>';
		  }
			?>
            
          <div class="bottom-navigation clearfix">
            <div class="paginate float-right clearfix">
              <a href="#" class="older">Older</a>
              <a href="#" class="prev"></a>
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#" class="points">...</a>
              <a href="#">14</a>
              <a href="#" class="next"></a>
              <a href="#" class="newest">Newest</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <div id="content"><div class="social-footer clearfix">
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
            <iframe src="http://player.vimeo.com/video/16285298?title=0&amp;byline=0&amp;portrait=0" width="200" height="150" style="border: 3px solid #fff; -webkit-border-radius: 2px; -moz-border-radius: @2px; -ms-border-radius: 2px; -o-border-radius: 2px; border-radius: 2px;"></iframe>
          </div>
        </div>
      </div></div>
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