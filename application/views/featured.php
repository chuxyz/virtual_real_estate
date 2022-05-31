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
    <div class="breadcrumbs"><a href="<?php echo base_url(); ?>">Home</a> <span>Featured Properties</span>
    <?php
	if(isset($prop_id))
	{
		$prop = $this->listing_model->get_prop_name($prop_id);
		echo '<a></a>&nbsp;<span>'.ucwords(strtolower($prop[0]->prop_name)).'</span>';
	}
	?>
    </div>
	</div>
	<!-- #End HEADER -->
    <!-- Start CONTENT
    ========================== -->
    <div id="content">
      <h2><span class="page-title">Featured Properties</span></h2>
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
				echo '<li'.$class.'><a href="'.base_url('featured/1/'.$property->prop_id).'">'.ucwords(strtolower($property->prop_name)).'</a></li>';
			}
			?>
          </ul>
          <div class="cat-shadow"><!-- --></div>
          
          <div class="search-shadow"><!-- --></div>
        </div>
        <div id="right-side" class="float-left">
        <?php
		if(count($featured) == 0)
		{
			echo '<div id="listing_div"><span class="no_result">No Result Found</span></div>';
		}
		else
		{
		?>
          <div class="top-navigation clearfix">
            
            <div class="paginate float-right clearfix">
            <?php
			// if not on page 1, don't show back links
			if ($page > 1) 
			{
   			// show << link to go back to page 1
			if($prop_id != NULL)
			{
   				echo '<a href="'.base_url('featured/1/'.$prop_id).'" class="older">Older</a>';
			}
			else
			{
				echo '<a href="'.base_url('featured/1').'" class="older">Older</a>';
			}
   			// get previous page num
   			$prevpage = $page - 1;
   			// show < link to go back to 1 page
			if($prop_id != NULL)
			{
   				echo '<a href="'.base_url('featured/'.$prevpage.'/'.$prop_id).'" class="prev"></a>';
			}
			else
			{
				echo '<a href="'.base_url('featured/'.$prevpage).'" class="prev"></a>';
			}
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
					if($prop_id != NULL)
					{
         				echo '<a href="'.base_url('featured/'.$x.'/'.$prop_id).'">'.$x.'</a>';
					}
					else
					{
						echo '<a href="'.base_url('featured/'.$x).'">'.$x.'</a>';
					}
					} // end else
				} // end if 
			} // end for
                 
			// if not on last page, show forward and last page links        
			if ($page != $totalpages) 
			{
   			// get next page
   			$nextpage = $page + 1;
    			// echo forward link for next page 
				if($prop_id != NULL)
				{
   			echo '<a href="'.base_url('featured/'.$nextpage.'/'.$prop_id).'" class="next"></a>';
   			// echo forward link for lastpage 
   			echo '<a href="'.base_url('featured/'.$totalpages.'/'.$prop_id).'" class="newest">Newest</a>';
				}
				else
				{
					echo '<a href="'.base_url('featured/'.$nextpage).'" class="next"></a>';
					// echo forward link for lastpage 
					echo '<a href="'.base_url('featured/'.$totalpages).'" class="newest">Newest</a>';
				}
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
		  foreach($featured_limit as $ft_limit)
		  {
			$state_name = $this->location_model->get_state_name($ft_limit->state_id);
			$state_name = ucwords(strtolower($state_name[0]->state_name));
			$town_name = $this->location_model->get_town_name($ft_limit->town_id);
			$town_name = ucwords(strtolower($town_name[0]->town_name));
			$prop_name = $this->listing_model->get_prop_name($ft_limit->prop_id);
			$prop_name = $prop_name[0]->prop_name;
			/////////Get Images
			$img = explode(',',$ft_limit->img_url);
			$pix_count = count($img);
            echo '<div class="product clearfix">';
			if($this->session->userdata('admin_name') == TRUE)
			{
              if($ft_limit->tag == 'sold')
			  {
				  echo '<div class="tag_button tbr"><a href="'.base_url('untag/'.$ft_limit->list_id).'">Remove tag</a></div>';
				  echo '<div class="l-new sold_tag"><a href="#"><!-- --></a></div>';
			  }
			  elseif($ft_limit->tag == 'rented')
			  {
				  echo '<div class="tag_button tbr"><a href="'.base_url('untag/'.$ft_limit->list_id).'">Remove tag</a></div>';
				  echo '<div class="l-new rented_tag"><a href="#"><!-- --></a></div>';
			  }
			  else
			  {
				  echo '<div class="tag_button tbr"><a href="'.base_url('tag/'.$ft_limit->list_id).'">Add tag</a></div>';
			  }
			}
			else
			{
				if($ft_limit->tag == 'sold')
			  {
				  echo '<div class="l-new sold_tag"><a href="#"><!-- --></a></div>';
			  }
			  elseif($ft_limit->tag == 'rented')
			  {
				  echo '<div class="l-new rented_tag"><a href="#"><!-- --></a></div>';
			  }
			  else
			  {
				  echo '';
			  }
			}
              echo '<div class="l-image float-left">
                <img src="'.base_url($img[0]).'" alt="" title="" height="134" width="220" />
                <div class="l-image-hover">
                  <a href="'.base_url($img[0]).'" class="l-lupa"><!-- --></a>
                  <!--<a href="#" class="l-link"><!-- --></a>-->
                </div>
              </div>
              <div class="l-image-shadow float-left"><!-- --></div>
              <div class="l-description float-left">
                <div class="l-title"><a href="'.base_url('property_details/'.$ft_limit->list_id).'">'.$ft_limit->prop_address.'</a></div>
                <div class="l-city">Town: <span>'.$town_name.'</span><br/>State: <span>'.$state_name.'</span></div>
                <div class="l-desc">'.$this->func->short_details($ft_limit->comment).'</div>
                <div class="l-features clearfix">
                  <div class="l-bedrooms">'.$prop_name.'</div>
                  <!--<div class="l-area">2416 m<sup>2</sup></div>-->
                  <!--<div class="l-baths">4 Baths</div>-->
                  <div class="l-pic">'.$pix_count.' Pictures</div>
                </div>
              </div>
              <div class="l-details float-left">
                <div class="l-price">₦'.number_format($ft_limit->price).'</div>
                <a href="#" class="send-friend">Send to friend</a>
                <div class="l-view"><a href="'.base_url('property_details/'.$ft_limit->list_id).'">View details</a></div>
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
			if($prop_id != NULL)
			{
   				echo '<a href="'.base_url('featured/1/'.$prop_id).'" class="older">Older</a>';
			}
			else
			{
				echo '<a href="'.base_url('featured/1').'" class="older">Older</a>';
			}
   			// get previous page num
   			$prevpage = $page - 1;
   			// show < link to go back to 1 page
			if($prop_id != NULL)
			{
   				echo '<a href="'.base_url('featured/'.$prevpage.'/'.$prop_id).'" class="prev"></a>';
			}
			else
			{
				echo '<a href="'.base_url('featured/'.$prevpage).'" class="prev"></a>';
			}
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
					if($prop_id != NULL)
					{
         				echo '<a href="'.base_url('featured/'.$x.'/'.$prop_id).'">'.$x.'</a>';
					}
					else
					{
						echo '<a href="'.base_url('featured/'.$x).'">'.$x.'</a>';
					}
					} // end else
				} // end if 
			} // end for
                 
			// if not on last page, show forward and last page links        
			if ($page != $totalpages) 
			{
   			// get next page
   			$nextpage = $page + 1;
    			// echo forward link for next page 
				if($prop_id != NULL)
				{
   			echo '<a href="'.base_url('featured/'.$nextpage.'/'.$prop_id).'" class="next"></a>';
   			// echo forward link for lastpage 
   			echo '<a href="'.base_url('featured/'.$totalpages.'/'.$prop_id).'" class="newest">Newest</a>';
				}
				else
				{
					echo '<a href="'.base_url('featured/'.$nextpage).'" class="next"></a>';
					// echo forward link for lastpage 
					echo '<a href="'.base_url('featured/'.$totalpages).'" class="newest">Newest</a>';
				}
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
		}
		?>
      </div>
      <!-- Start SOCIAL FOOTER
      ========================================== -->
      <div class="foot-content">
      <?php
	  $this->load->view($footer);
	  ?>
</body>
</html>