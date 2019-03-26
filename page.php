<?php get_header();?>
<div class="pages-main-container">
	<div class="pages-section">
		<div class="pages-info-main">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<h2 class="pages-h2">
				<?php the_title();?>
			</h2>
			
			<img class="pages-profile-image" src="<?php the_field('header-image');?>">
			
			<span class="pages-content-main">
				<?php the_content(); ?>
			</span>
			
			<?php endwhile; endif; ?>
			
		</div>

		<?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'pages-widget-area' ) ) : ?>
	<?php endif; ?>
		
	</div>
	
	<?php get_sidebar('primary');?>
	
</div>

<?php get_footer();?>