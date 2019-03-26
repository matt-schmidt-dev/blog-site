<div id="primary" class="sidebar">
	
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'primary-sidebar' ) ) : ?>
	<?php endif; ?>
		
	<!--<div class="primary-top">
		<h3 class="sidebar-widget-title">Latests Posts</h3>

<?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 5) : the_post(); ?>
			
		<div class="primary-inner">
				<a class="posts-titles-sidebar-a" href="<?php the_permalink() ;?>">
					<h5 class="posts-titles-sidebar"><?php the_title(); ?></h5>
				</a>
			<div class="author-date-span-sidebar">
				<p class="p-posts-margin-sidebar" id="author-name"><?php the_author_link(); ?></p>
				<p class="vertical-line-sidebar">|</p>
				<p class="p-posts-margin-sidebar" id="date-stamp"><?php the_date(); ?></p>
			</div>

		</div>
		<hr>
	
<?php $i++; endwhile; endif; ?>
	
</div>-->

	<?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'primary-sidebar-two' ) ) : ?>
	<?php endif; ?>
	
</div>