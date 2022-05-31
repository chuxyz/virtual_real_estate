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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ie.css'); ?>" media="screen">
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
</head>
<body>
	<!-- Start HEADER
    ========================== -->
<?php
$this->load->view($header);
?>
    </div>
	</div>
	<!-- #End HEADER -->
    <!-- Start CONTENT
    ========================== -->
    
<div id="content" style="margin-top:0px;">
    <h2><span class="page-title">Page not found</span></h2>
    <div id="container" style="height:auto !important">
    
    <div id="listing_div" style="padding:20px; width:958px !important; font-family:'Comic Sans MS', cursive;">
<p style="font-size:18px;">The requested URL <?php echo current_url(); ?> was not found on this server.</p>
<p style="font-size:18px;">Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request. <br/>Return to <a href="<?php echo base_url(); ?>">hompage</a></p>
      </div>
    </div>
      
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <?php
	  $this->load->view($footer);
	  ?>
</body>
</html>
