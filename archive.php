<?php get_header();?>

<div class="header-section" style="background-image: url(<?php the_field('header-image'); ?>)">
  <div class="header-section-info">
	  <h1 class="h1-header-image">Blog</h1>
  </div>
</div>

<div class="latests-flex">
	
<?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 3) : the_post(); ?>
	
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			
		<div class="latests-rows" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
			<a href="<?php the_permalink() ;?>">
			<h3 class="posts-titles"><?php the_title(); ?></h3>
			<?php the_time();?>
			<?php the_excerpt(); ?>	
			</a>
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

<?php get_footer();?>