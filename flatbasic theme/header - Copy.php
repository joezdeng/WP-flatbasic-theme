<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Homepage.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
    
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template-directory');?>style.css"/>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
</head>

<body <?php body_class(); ?>>
	
	<div id="pageWrap">

		<div id="header">
			<a href="C:\Users\Joe Deng\Documents\Projects\NU Baja SAE\Redesign\Homepage.html"><img id="header-img" src="<?php bloginfo('stylesheet_directory');?>/images/baja banner.jpg" width="978" height="451" alt="The team car speeds down the snow-covered course."/></a>
            
            <div id="menuBar">
        		<ul class="menuBar">
            		<li><a title="Home Page" href="index.php">Home</a></li>
                	<li><a href="About.html">About</a>
                		<ul class="submenu">
                    		<li><a href="History.html">History</a></li>
                        	<li><a href="MissionStatement.html">Mission Statement</a></li>
                    	</ul>
                    </li>
                	<li><a href="Competitions.html">Competitions</a>
                		<ul class="submenu">
                    		<li><a href="UpcomingEvents.html">Upcoming Events</a></li>
                        	<li><a href="TNResults.html">Tennessee Tech Series Results</a></li>
                        	<li><a href="Winter13Results.html">Winter Baja 2013 Results</a></li>
                    	</ul>
                    </li>
                	<li>Photos
                		<ul class="submenu">
                    		<li>Illinois Cliffs</li>
                        	<li>Rocky Glen '12</li>
                        	<li>Tennessee Comp</li>
                        	<li>Winter Baja</li>
                    	</ul>
                    </li>
                	<li><a href="Sponsorship.html">Sponsorship</a></li>
                	<li><a href="Team.html">Team</a>
                		<ul class="submenu">
                    		<li><a href="Contacts.html">Contacts</a></li>
                        	<li><a href="TeamPhotos.html">Team Photos</a></li>
                    	</ul>
                    </li>            
            	</ul>
            </div> <!-- End menuBar -->
           
            <div id="search">
            	<h1 id="pageTitle">Northwestern University Baja SAE</h1>
            	<div id="searchBox">
                    <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    					<div>
        					<input type="text" id="s" name="s" value="" size="29"/>
        					<input type="submit" value="Search" id="searchsubmit" />
   						</div>
					</form>
            	</div>
			</div> <!--End search-->
		</div>

	<div id="content-wrap">