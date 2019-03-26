<div id="original" class="sidebar">
		
	<div class="primary-top">
		<h3>Latests Posts</h3>
		
		<hr>
	
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
	
</div>

        <aside id="archives" class="widget">
            <h3 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
			<hr>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
</div>