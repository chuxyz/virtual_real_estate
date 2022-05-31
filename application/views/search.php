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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ie.css'); ?>" media="screen" />
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
	<?php
	$this->load->view($header);
	?>
    </div>
    <div class="breadcrumbs">&nbsp;<a href="<?php echo base_url(); ?>">Home</a> <span>Search</span><a></a><span><?php echo $keyword; ?></span></div>
	</div>
	<!-- #End HEADER -->
    <!-- Start CONTENT
    ========================== -->
    <div id="content" style="margin-top:10px !important;">
      
      <div class="clearfix">
      <div id="left_nav" class="float-left" style="margin-bottom:50px;">
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
        <div id="right-side" class="float-right">
        <h2 style="text-transform:none;"><span class="page-title">Search result for <font size="+2"><?php echo $keyword; ?></font></span></h2>
        <?php
		if(count($search_result) == 0)
		{
			echo '<div id="listing_div"><span class="no_result">No Result Found</span></div>';
		}
		else
		{
		?>
          <div class="top-navigation search-top-nav clearfix">
            <div class="paginate float-right clearfix">
            <?php
			// if not on page 1, don't show back links
			if ($page > 1) 
			{
   			// show << link to go back to page 1
   			echo '<a href="'.base_url('search/'.$keyword.'/1').'" class="older">Older</a>';
   			// get previous page num
   			$prevpage = $page - 1;
   			// show < link to go back to 1 page
   			echo '<a href="'.base_url('search/'.$keyword.'/'.$prevpage).'" class="prev"></a>';
   			} // end if 

			// loop to show links to range of pages around current page
			for ($x = ($page - $range); $x < (($page + $range) + 1); $x++) 
			{
   			// if it's a valid page number...
   				if (($x > 0) && ($x <= $totalpages)) 
				{
			  		// if we're on current page...
			  		if ($x == $page) 
					{
         			// 'highlight' it but don't make a link
         			echo '<a href="#" class="active">'.$x.'</a>';
      				// if not current page...
      				} 
					else
					{
         			// make it a link
         			echo '<a href="'.base_url('search/'.$keyword.'/'.$x).'">'.$x.'</a>';
					} // end else
				} // end if 
			} // end for
                 
			// if not on last page, show forward and last page links        
			if ($page != $totalpages) 
			{
   			// get next page
   			$nextpage = $page + 1;
    			// echo forward link for next page 
   			echo '<a href="'.base_url('search/'.$keyword.'/'.$nextpage).'" class="next"></a>';
   			// echo forward link for lastpage 
   			echo '<a href="'.base_url('search/'.$keyword.'/'.$totalpages).'" class="newest">Newest</a>';
			} // end if
/****** end build pagination links ******/
//echo $_SERVER['PHP_SELF'];
			?>
              <!--<a href="#" class="older">Older</a>
              <a href="#" class="prev"></a>
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#" class="points">...</a>
              <a href="#">14</a>
              <a href="#" class="next"></a>
              <a href="#" class="newest">Newest</a>-->
            </div>
          </div>
          <div class="list-products clearfix">
          <?php
		  foreach($search_result_limit as $search)
		  {
			$state_name = $this->location_model->get_state_name($search->state_id);
			$state_name = ucwords(strtolower($state_name[0]->state_name));
			$town_name = $this->location_model->get_town_name($search->town_id);
			$town_name = ucwords(strtolower($town_name[0]->town_name));
			$prop_name = $this->listing_model->get_prop_name($search->prop_id);
			$prop_name = $prop_name[0]->prop_name;
			/////////Get Images
			$img = explode(',',$search->img_url);
			$pix_count = count($img);
            echo '<div class="product clearfix pad-left">';
			if($this->session->userdata('admin_name') == TRUE)
			{
              if($search->tag == 'sold')
			  {
				  echo '<div class="tag_button"><a href="'.base_url('untag/'.$search->list_id).'">Remove tag</a></div>';
				  echo '<div class="l-new sold_tag"><a href="#"><!-- --></a></div>';
			  }
			  elseif($search->tag == 'rented')
			  {
				  echo '<div class="tag_button"><a href="'.base_url('untag/'.$search->list_id).'">Remove tag</a></div>';
				  echo '<div class="l-new rented_tag"><a href="#"><!-- --></a></div>';
			  }
			  else
			  {
				  echo '<div class="tag_button"><a href="'.base_url('tag/'.$search->list_id).'">Add tag</a></div>';
			  }
			}
			else
			{
				if($search->tag == 'sold')
			  {
				  echo '<div class="l-new sold_tag"><a href="#"><!-- --></a></div>';
			  }
			  elseif($search->tag == 'rented')
			  {
				  echo '<div class="l-new rented_tag"><a href="#"><!-- --></a></div>';
			  }
			  else
			  {
				  echo '';
			  }
			}
              echo'<div class="l-image float-left">
                <img src="'.base_url($img[0]).'" alt="" title="" height="134" width="220" />
                <div class="l-image-hover">
                  <a href="'.base_url($img[0]).'" class="l-lupa"><!-- --></a>
                  <!--<a href="#" class="l-link"><!-- --></a>-->
                </div>
              </div>
              <div class="l-image-shadow float-left"><!-- --></div>
              <div class="l-description float-left">
                <div class="l-title"><a href="'.base_url('property_details/'.$search->list_id).'">'.$search->prop_address.'</a></div>
                <div class="l-city">Town: <span>'.$town_name.'</span><br/>State: <span>'.$state_name.'</span></div>
                <div class="l-desc">'.$this->func->short_details($search->comment).'</div>
                <div class="l-features clearfix">
                  <div class="l-bedrooms">'.$prop_name.'</div>
                  <!--<div class="l-area">2416 m<sup>2</sup></div>-->
                  <!--<div class="l-baths">4 Baths</div>-->
                  <div class="l-pic">'.$pix_count.' Pictures</div>
                </div>
              </div>
              <div class="l-details float-left">
                <div class="l-price">₦'.number_format($search->price).'</div>
                <a href="#" class="send-friend">Send to friend</a>
                <div class="l-view"><a href="'.base_url('property_details/'.$search->list_id).'">View details</a></div>
              </div>           
            </div>';
		  }
			?>
            
          <div class="bottom-navigation clearfix">
            <div class="paginate float-right clearfix">
            <?php
			// if not on page 1, don't show back links
			if ($page > 1) 
			{
   			// show << link to go back to page 1
   			echo '<a href="'.base_url('search/'.$keyword.'/1').'" class="older">Older</a>';
   			// get previous page num
   			$prevpage = $page - 1;
   			// show < link to go back to 1 page
   			echo '<a href="'.base_url('search/'.$keyword.'/'.$prevpage).'" class="prev"></a>';
   			} // end if 

			// loop to show links to range of pages around current page
			for ($x = ($page - $range); $x < (($page + $range) + 1); $x++) 
			{
   			// if it's a valid page number...
   				if (($x > 0) && ($x <= $totalpages)) 
				{
			  		// if we're on current page...
			  		if ($x == $page) 
					{
         			// 'highlight' it but don't make a link
         			echo '<a href="#" class="active">'.$x.'</a>';
      				// if not current page...
      				} 
					else
					{
         			// make it a link
         			echo '<a href="'.base_url('search/'.$keyword.'/'.$x).'">'.$x.'</a>';
					} // end else
				} // end if 
			} // end for
                 
			// if not on last page, show forward and last page links        
			if ($page != $totalpages) 
			{
   			// get next page
   			$nextpage = $page + 1;
    			// echo forward link for next page 
   			echo '<a href="'.base_url('search/'.$keyword.'/'.$nextpage).'" class="next"></a>';
   			// echo forward link for lastpage 
   			echo '<a href="'.base_url('search/'.$keyword.'/'.$totalpages).'" class="newest">Newest</a>';
			} // end if
/****** end build pagination links ******/
//echo $_SERVER['PHP_SELF'];
			?>
              <!--<a href="#" class="older">Older</a>
              <a href="#" class="prev"></a>
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#" class="points">...</a>
              <a href="#">14</a>
              <a href="#" class="next"></a>
              <a href="#" class="newest">Newest</a>-->
            </div>
          </div>
        </div>
        <?php
		} // end else where count($search_result) > 0
		?>
      </div>
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <div id="content">
      <?php
	  $this->load->view($footer);
	  ?>
</body>
</html>