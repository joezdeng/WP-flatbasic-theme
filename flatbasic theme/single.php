<?php get_header(); ?>

	<div id="mainColumn">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="mainContainer" <?php post_class() ?> id="post-<?php the_ID(); ?>">
        	<div class="bannerTitle"><h4>BLOG POST</h4></div>
			
			<h2><?php the_title(); ?></h2>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<br />
            
            <p class="Excerpt">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</p>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div> <!--End of mainContainer-->
	
	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
    
    </div> <!--End of mainColumn-->
    
<?php get_sidebar('right'); ?>

</div> <!--End content-wrap-->

<?php get_footer(); ?>