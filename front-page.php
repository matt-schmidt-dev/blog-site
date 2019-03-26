<?php get_header();?>

<!-- Main -->

<div class="main-content">
	<div class="top-section">

<?php if(have_posts()) :
  // Loop#1
  $rp_query = new WP_Query('posts_per_page=1');
  while ($rp_query->have_posts()) :
    $rp_query->the_post(); ?>
		
    <?php $dnd[] = $post->ID; ?>	
			<div class="main-post">
				<img class="thumbnail-image-responsive" src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID)); echo $img[0]; ?>" alt="<?php the_title(); ?>"/>
				<span class="thumbnail-image-set"><?php the_post_thumbnail('large-thumbnail-size');?></span>
				<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<P>By <?php the_author(); ?></P>
			</div>

  <?php endwhile;?>
		
		<div class="main-side-posts">
		
 <?php // Loop#2 for category ID 23
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  5));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
		
			<?php $dnd[] = $post->ID; ?>
			
				<div class="sub-main-side-posts">
					<span class="main-side-posts-small-thumbnail"><?php the_post_thumbnail('small-thumbnail-size');?></span>
					<span class="main-side-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span>
					<div class="h1-author-smsp">
					<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p>By <?php the_author();?></p>	
					</div>
				</div>		
		
  <?php endwhile; ?>
		</div>		
	</div>
	
	
		
		<?php echo do_shortcode( '[sp_wpcarousel id="211"]' ); ?>

	

<div class="middle-section">
				<div class="mid-posts">
		
 <?php // Loop#3 for category ID 23
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  5));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
		
				<div class="sub-mid-posts">
					<span class="mid-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span>
					<span class="mid-posts-small-thumbnail"><?php the_post_thumbnail('small-thumbnail-size');?></span>
					<div class="h1-author-smsp">
					<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p>By <?php the_author();?></p>	
					</div>
				</div>		
		
  <?php endwhile; endif; ?>
		</div>
</div>

<div class="bottom-section">
	
</div>
	
</div>

<?php get_footer();?>