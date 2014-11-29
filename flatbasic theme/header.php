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
			<a href="index.php"><img id="header-img" src="<?php bloginfo('stylesheet_directory');?>/images/baja banner.jpg" width="978" height="451" alt="The team car speeds down the snow-covered course."/></a>
            
            <div id="menuBar">
        		
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'menuBar' ) ); ?>
                
            </div> <!-- End menuBar -->
           
            <div id="search">
            	<span id="searchText"><h1 id="pageTitle">Northwestern University Baja SAE</h1>
            	<div id="searchBox">
                    <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    					<div>
        					<input type="text" id="s" name="s" value="" size="29"/>
        					<input type="submit" value="Search" id="searchsubmit" />
   						</div>
					</form>
            	</div></span>
			</div> <!--End search-->
		</div>

	<div id="content-wrap">