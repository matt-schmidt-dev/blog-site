<?php get_header();?>

<div class="archive-main-content">

<div class="archive-posts">
	
<?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 3) : the_post(); ?>
			
		<div class="archive-posts-columns">
			<?php the_post_thumbnail('medium-large-thumbnail-size');?>
			<div class="archive-post-content">
				<a href="<?php the_permalink() ;?>">
				<h3 class="archive-post-titles"><?php the_title(); ?></h3></a>
				<span><?php the_author(); ?></span>
				<?php the_excerpt(); ?>	
			</div>
		</div>
	
<?php $i++; endwhile; ?>
	<p>
		<?php next_posts_link(); ?>
	</p>
	<p>
		<?php previous_posts_link(); ?>
	</p>
	
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	
</div>
	
</div>

<?php get_footer();?>