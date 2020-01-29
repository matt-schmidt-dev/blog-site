<?php get_header();?>

<div class="archive-main-content">
    
    <div class="archive-section">
  
  <h2><?php the_author(); ?></h2>

<div class="archive-posts">
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				
		<div class="archive-posts-columns">
			<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="archive-posts-medium-large-thumbnail"><?php the_post_thumbnail('medium-large-thumbnail-size');?></span></a>
			<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="archive-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span></a>
			<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="archive-posts-small-medium-thumbnail"><?php the_post_thumbnail('small-medium-thumbnail-size');?></span></a>
			<div class="archive-post-content">
			    <a href="<?php the_permalink() ;?>">
				<h3 class="archive-post-titles"><?php the_title(); ?></h3></a>
				<span>By <?php the_author(); ?></span>
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

<?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'pages-widget-area' ) ) : ?>
	<?php endif; ?>
		
	</div>
	
	<?php get_sidebar('primary');?>
	
</div>

<?php get_footer();?>