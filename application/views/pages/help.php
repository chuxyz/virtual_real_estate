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
	<script type="text/javascript" src="<?php echo base_url('js/jquery-1.9.1.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/modernizr.custom.28468.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/scripts.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jniceit.js'); ?>"></script>
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
    <div class="breadcrumbs"><a href="<?php echo base_url(); ?>">Home</a> <span>Help</span>
    </div>
	</div>
	<!-- #End HEADER -->
    <!-- Start CONTENT
    ========================== -->
    <div id="content">
      <h2><span class="page-title">Help</span></h2>
      <div class="contact-box p-property clearfix">
      <h3>Get Assistance</h3>
      <div class="form-wrap" style="padding-left:20px;">
      
      <?php
	if($this->session->userdata('success_msg') == TRUE)
	{
		echo '<div class="success_msg">'.$this->session->userdata('success_msg').'</div>';
		$this->session->unset_userdata('success_msg');
	}
	?>
      		<form action="<?php echo current_url() ?>" enctype="multipart/form-data" method="post" class="contact-agent clearfix" style="padding-left:10px;">
              <div class="form-left float-left">
                <input type="text" name="name" placeholder="Your name" value="Your name" onClick="value=''" class="agent-input" /><?php echo form_error('name', '<div class="error x-borderleft">', '</div>'); ?>
                <input type="text" name="email" placeholder="Email address" value="Email address" onClick="value=''" class="agent-input" /><?php echo form_error('email', '<div class="error x-borderleft">', '</div>'); ?>
                <input type="text" name="subject" placeholder="Subject" value="Subject" onClick="value=''" class="agent-input" /><?php echo form_error('subject', '<div class="error x-borderleft">', '</div>'); ?>
              </div>
              <div class="form-right float-left">
                <textarea class="agent-textarea" name="message"></textarea><?php echo form_error('message', '<div class="error x-borderleft">', '</div>'); ?>
              </div>
              <div class="float-left" style="position:absolute; bottom:-25px; right:65px;">
                <p>By sending, you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
              </div>
              <div class="float-right">
                <input type="submit" name="contact" value="Contact admin" class="send-to-admin" style="position:absolute; bottom:-35px; left:10px; margin-left:20px;" />
              </div>
            </form>
            </div>
      </div>
      </div>
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <div class="foot-content centered">
      <?php
	  $this->load->view($footer);
	  ?>
</body>
</html>