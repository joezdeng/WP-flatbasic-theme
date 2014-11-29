<?php get_header(); ?>

	<div id="mainColumn">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="mainContainer" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>
            
            <br />

			<p class="Excerpt">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</p> <!--End blogPost-->

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div> <!--End of mainContainer-->

		<?php endwhile; endif; ?>
        
	</div> <!--End of mainColumn-->

<?php get_sidebar('right'); ?>
        
</div> <!--End content-wrap-->

<?php get_footer(); ?>