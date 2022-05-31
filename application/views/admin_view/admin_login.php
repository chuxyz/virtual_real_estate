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
  <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
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
	<!--<div id="top">
		<div class="top clearfix">
			<div class="float-right"><a href="login.html" class="account">My account</a>&nbsp;|&nbsp;<a href="register.html" class="register">Register</a>&nbsp;|&nbsp;<a href="help.html" class="help">Help</a></div>
		</div>
	</div>-->
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
    <h2><span>Admin Login</span></h2>
    <div id="container" style="height:auto !important">
    <div id="login_div">
    <form action="<?php echo current_url(); ?>" method="post">
	<div id="login_box" class="round_all clearfix">
    <?php
	if($this->session->userdata('ses_login_msg') == TRUE)
	{
         echo '<div class="log_error" >'.$this->session->userdata('ses_login_msg').'</div>';
		 $this->session->unset_userdata('ses_login_msg');
	}
		 ?>
		<label class="fields"><strong>Admin ID</strong></label> 
		<input type="text" id="username" name="admin_name" value="" placeholder="Admin ID" class="input-text" /> 
		
		<label class="fields"><strong>Password</strong></label>
		<input type="password" id="password" name="admin_pwd" value="" placeholder="Admin Password" class="input-text" /> 
		
		<input class="button" name="submit" type="submit"  value="Login" style="margin-left:14px;"/> 
        
		<div id="bar" class="round_top">
		</div>	
	</div>
</form>
      </div>
    </div>
      <h2><span class="no_bg"></span></h2>
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <?php
	  $this->load->view($footer);
	  ?>
</body>
</html>
