<div id="this-front-sidebar" class="front-sidebar">
	
	<div class="front-sidebar-email">
		<h5>
			SUBSCRIBE!
		</h5>
		<P>
			Subscribe to our email list to recieve updates & exclusive content.
		</P>
		<form id="e-form-front-sidebar" action="https://formspree.io/matts0809@gmail.com" method="POST">
			<input class="e-name" type="text" name="Name" placeholder="Name" size="35" required>
        	<input class="e-email" type="email" name="Email" placeholder="Email" size="35" required>
        	<input class="e-submit" type="submit" value="SUBMIT">
		</form>
	</div>
	
	
	
	<div class="fp-heading">
		<h5>
			FEATURED POSTS
		</h5>
		
		<hr>
		
		
	</div>
	
		
	<div class="main-side-posts sidebar-front-fp">
		
 <?php // Loop#2 for category ID 23
  $sm_query = new WP_Query(array(
      'post__not_in'  =>  $dnd,
      'posts_per_page'  =>  4));
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