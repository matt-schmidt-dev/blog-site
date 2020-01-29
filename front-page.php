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
				<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><img class="thumbnail-image-responsive" src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID)); echo $img[0]; ?>" alt="<?php the_title(); ?>"/></a>
				<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="thumbnail-image-set"><?php the_post_thumbnail('large-thumbnail-size');?></span></a>
				<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<P>By <?php the_author(); ?></P>
			</div>

  <?php endwhile;?>
		
		<div class="main-side-posts">
		
 <?php // Loop#2
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  5));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
		
			<?php $dnd[] = $post->ID; ?>
			
				<div class="sub-main-side-posts">
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="main-side-posts-small-thumbnail"><?php the_post_thumbnail('small-thumbnail-size');?></span></a>
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="main-side-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span></a>
					<div class="h1-author-smsp">
					<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p>By <?php the_author();?></p>	
					</div>
				</div>		
		
  <?php endwhile; ?>
		</div>		
	</div>
	
	
	<div class="ltl-banner-horz">
		<a href="https://">
		<img id="ltl-img-horz" src="https://thetechblog.site/wp-content/uploads/2019/12/ad-spot-one-thetechblog.jpg" alt="Let Them Live Banner">
			</a>
	</div>
	<div class="ltl-banner">
		<a href="https://">
		<img id="ltl-img" src="https://thetechblog.site/wp-content/uploads/2019/12/ad-spot-one-short-thetechblog.jpg" alt="Let Them Live Banner">
			</a>
	</div>
	

<div class="middle-section m-s-1">
				<div class="mid-posts">
		
 <?php // Loop#3
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  5));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
					
			<?php $dnd[] = $post->ID; ?>
		
				<div class="sub-mid-posts">
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span></a>
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-small-thumbnail"><?php the_post_thumbnail('small-thumbnail-size');?></span></a>
					<div class="h1-author-smsp">
					<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p>By <?php the_author();?></p>	
					</div>
				</div>		
		
  <?php endwhile; ?>
		</div>
		
		
		<?php get_sidebar('front');?>
		
		
</div>
	

    <div class="yt-carousel">
        <h4>JavaScript Instructionals</h4>
        <button class="carousel-button carousel-button-prev"></button>
        <div class="carousel-track-container">
            <div class="carousel-track">

            </div>
        </div>
        <button class="carousel-button carousel-button-next"></button>
    </div>

	
	<div class="middle-section m-s-2">
				<div class="mid-posts">
		
 <?php // Loop#4
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  5));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
    
                <?php $dnd[] = $post->ID; ?>
		
				<div class="sub-mid-posts">
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span></a>
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-small-thumbnail"><?php the_post_thumbnail('small-thumbnail-size');?></span></a>
					<div class="h1-author-smsp">
					<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p>By <?php the_author();?></p>	
					</div>
				</div>		
		
  <?php endwhile; ?>
		</div>
	
</div>


<div class="middle-section m-s-load-one">
				<div class="mid-posts">
		
 <?php // Loop#4
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  10));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
    
                <?php $dnd[] = $post->ID; ?>
		
				<div class="sub-mid-posts">
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span></a>
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-small-thumbnail"><?php the_post_thumbnail('small-thumbnail-size');?></span></a>
					<div class="h1-author-smsp">
					<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p>By <?php the_author();?></p>	
					</div>
				</div>		
		
  <?php endwhile; ?>
		</div>
	
</div>





<div class="middle-section m-s-load-two">
				<div class="mid-posts">
		
 <?php // Loop#4
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  25));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
    
                <?php $dnd[] = $post->ID; ?>
		
				<div class="sub-mid-posts">
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-medium-thumbnail"><?php the_post_thumbnail('medium-thumbnail-size');?></span></a>
					<a class="thumbnail-img-link" href="<?php the_permalink(); ?>"><span class="mid-posts-small-thumbnail"><?php the_post_thumbnail('small-thumbnail-size');?></span></a>
					<div class="h1-author-smsp">
					<h1><a class="a-no-decoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p>By <?php the_author();?></p>	
					</div>
				</div>		
		
  <?php endwhile; endif; ?>
		</div>
	
</div>





<div class="load-next-ten">
    <button class="load-next-ten-btn">
       Load More.... 
    </button>
</div>






</div>
<?php get_footer();?>