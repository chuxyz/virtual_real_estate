<div id="header">
    <!--search -->
          <form action="<?php echo base_url(); ?>" enctype="multipart/form-data" method="post" class="search clearfix">
            <input type="text" name="keyword" placeholder="Search..." value="Search..." onClick="value=''" class="search-input" />
            <input type="submit" name="search" value=" " class="submit-input" />
          </form>
          <!-- #End-->
		<div class="logo-social clearfix">
			<a href="<?php echo base_url(); ?>" class="logo"><!-- --></a>
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
          <li class="home<?php echo $home; ?>"><div class="first"><!-- --></div><a href="<?php echo base_url(); ?>">Home</a> <p><a href="#">page</a></p>
          </li>
					<li<?php echo $about; ?>><a href="<?php echo base_url('about'); ?>">About</a> <p><a href="<?php echo base_url('about#contact-form'); ?>">company</a></p></li>
					<li<?php echo $feature; ?>><a href="<?php echo base_url('featured'); ?>">Featured</a> <p><a href="<?php echo base_url('featured'); ?>">Properties</a></p></li>
					<li<?php echo $contact; ?>><a href="<?php echo base_url('contact'); ?>">Contact</a> <p><a href="<?php echo base_url('contact'); ?>">Information</a></p></li>
                    <li class="last<?php echo $help; ?>"><a href="<?php echo base_url('help'); ?>">Help</a>&nbsp; &nbsp; &nbsp; <p><a href="<?php echo base_url('help'); ?>"></a></p></li>
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