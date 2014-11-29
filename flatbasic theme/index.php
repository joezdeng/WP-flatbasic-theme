<?php get_header(); ?>

	<div id="mainColumn">
    
    <?php query_posts('showposts=10'); ?>
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
    <div class="mainContainer">
           
        <div class="bannerTitle"><h4>BLOG POST</h4></div>
    
    	<div class="postTitle"><b><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></b></div>
    
    	<div class="postDate"><small><b><?php the_time('F jS, Y'); ?></b></small></div>
    
    	<p class="Excerpt"><br /><br /><?php the_excerpt() ?></p>
    
    </div> <!-- End of mainContainer-->
    
    <?php endwhile; ?>
    
    <?php else : ?>
  <h2 class="center">Not Found</h2>
 <p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  	<?php endif; ?>
	
    </div> <!-- End mainColumn-->
    
	<?php get_sidebar(); ?>
    
    </div> <!--End content-wrap-->
        
    <?php get_footer(); ?>