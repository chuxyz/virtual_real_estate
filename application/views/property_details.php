<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if lte IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie9" lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  	================================================== -->
	<meta charset="utf-8">
	<title>Virtual Real Estate</title>
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
    <script type="text/javascript" src="<?php echo base_url('js/jquery-1.9.1.js'); ?>"></script>
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
	
  <noscript>
      <style>
        .es-carousel ul{
          display:block;
        }
      </style>
    </noscript>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
      <div class="rg-image-wrapper">
        <div class="rg-image"></div>
        <div class="rg-loading"></div>
      </div>
    </script>
</head>
<body>
	<!-- Start HEADER
    ========================== -->
	<?php
	$this->load->view($header);
	?>
    </div>
    <div class="breadcrumbs"><a href="<?php echo base_url(); ?>">Home</a> 
    <span>
	<?php 
	if($list[0]->category == 'sale') 
	{
		echo 'For Sale';
		$cat = 'sale';
	}
	else 
	{
		echo 'For Rent';
		$cat = 'rent';
	}
	?>
    </span><a></a>
    <?php
    $state_nm = $this->location_model->get_state_name($list[0]->state_id);
	$state_nm = ucwords(strtolower($state_nm[0]->state_name));
	$town_nm = $this->location_model->get_town_name($list[0]->town_id);
	$town_nm = ucwords(strtolower($town_nm[0]->town_name));
	$prop_nm = $this->listing_model->get_prop_name($list[0]->prop_id);
	$prop_nm = ucwords(strtolower($prop_nm[0]->prop_name));
	?>
    <span><?php echo $state_nm; ?></span><a></a>
    <span><?php echo $town_nm; ?></span><a></a>
    <span><?php echo $prop_nm; ?></span><a></a>
    <span><?php echo $list[0]->prop_address ?></span></div>
	</div>
	<!-- #End HEADER -->
    <!-- Start CONTENT
    ========================== -->
    <div id="content">
      <h2><span class="page-title"><?php echo $list[0]->prop_address ?></span></h2>
      <div class="clearfix">
        <div id="left-side" class="float-left">
          <ul class="cat-menu">
            <li class="categoriess">Categories</li>
            <?php
			foreach($properties as $property)
			{
				$class = '';
				if($property->prop_id == $list[0]->prop_id)
				{
					$class = ' class="active"';
				}
				echo '<li'.$class.'><a href="'.base_url($cat.'/'.$list[0]->town_id.'/'.$property->prop_id.'/1').'">'.ucwords(strtolower($property->prop_name)).'</a></li>';
			}
			?>
          </ul>
          <div class="cat-shadow"><!-- --></div>
          
          <div class="search-shadow"><!-- --></div>
        </div>
        <div id="right-side" class="float-left">
          <div class="p-property clearfix">
            <div class="es-carousel-wrapper float-left">
            <script type="text/javascript" src="<?php echo base_url('js/jquery.jcarousel.min.js'); ?>"></script>
  		<script type="text/javascript" src="<?php echo base_url('js/jcarousel-slider3.js'); ?>"></script>
                    <div class="es-carousel">
                      <ul>
                      <?php
					  $imgs = explode(',',$list[0]->img_url);
					  foreach($imgs as $img)
					  {
                        echo '<li><img src="'.base_url(trim($img)).'" height="100%" width="100%" /></li>';
					  }
						?>
						</ul>
                    </div>
                    <a href="#" class="jcarousel-control-prev3">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next3">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
                  </div>
            <div class="p-det float-left">
              <h3><span class="naira">₦</span><?php echo number_format($list[0]->price); ?></h3>
              <div class="det-det clearfix">
                <div class="left float-left">State:</div><div class="right float-left"><?php echo $state_nm ?></div>
                <div class="left float-left">Town:</div><div class="right float-left"><?php echo $town_nm; ?></div>
                <div class="left float-left">Address:</div><div class="right float-left"><?php echo ucwords(strtolower($list[0]->prop_address)); ?></div>
                <div class="left float-left">Property type:</div><div class="right float-left"><?php echo $prop_nm ?></div>
                <div class="left float-left">Category</div><div class="right float-left">
                <?php 
					if($list[0]->category == 'sale') echo 'For Sale';
					else echo 'For Rent';
				?>
                </div>
                <div class="left float-left">Added On:</div><div class="right line float-left"><?php echo date('jS M, Y',$list[0]->time_added).' by '.date('g:i:sa',$list[0]->time_added); ?></div>
                <div class="left float-left">Views:</div><div class="right line float-left">
				<?php echo $list[0]->views; ?>
				</div><br/>
                <div class="left float-left">Listing agent:</div><div class="right float-left">
                <?php echo ucwords(strtolower($list[0]->agent_name)); ?>
                </div>
                <div class="left float-left">Agent's Address:</div><div class="right float-left"><?php echo $list[0]->agent_address ?>v</div>
                <div class="left line float-left">Agent's phone no:</div><div class="right float-left"><?php echo $list[0]->phone ?></div> 
              </div>
            </div>
          </div>
          <div class="p-property clearfix">
            <h3>Description</h3>
            <div class="property-description">
              <?php echo $list[0]->comment ?>
            </div>
          </div>
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