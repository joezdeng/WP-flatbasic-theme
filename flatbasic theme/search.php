<?php get_header(); ?>

	<div id="mainColumn">
	
		<?php if (have_posts()) : ?>

			<h2 class="pagetitle">Search Results</h2>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>

				<div class="mainContainer">
           
        			<div class="bannerTitle"><h4>BLOG POST</h4></div>
    
    				<div class="postTitle"><b><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></b></div>
    
    				<div class="postDate"><small><b><?php the_time('F jS, Y'); ?></b></small></div>
    
    				<p class="Excerpt"><br /><br /><?php the_excerpt() ?></p>
    
    			</div> <!-- End of mainContainer-->

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php else : ?>

			<h2 class="pagetitle">No posts found.</h2>

		<?php endif; ?>
       
	 </div> <!-- End mainColumn-->        

<?php get_sidebar(); ?>

</div> <!--End content-wrap-->

<?php get_footer(); ?>
