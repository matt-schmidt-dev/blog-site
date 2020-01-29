<?php get_header();?>

<!--<div class="latests-posts-main-contain">
	
	<div class="main-blog">
	
<?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 22) : the_post(); ?>

		<div class="posts-contain">
			<div class="posts-contain-inner">
				<?php the_category();?>
				<a class="posts-titles-a" href="<?php the_permalink() ;?>">
					<h2 class="posts-titles"><?php the_title(); ?></h2>
				</a>
					<div class="author-date-span">
						<p id="posts-avatar-circle">
							<?php echo get_avatar( get_the_author_meta( 'ID' ) , 35 ); ?>
						</p>
						<p class="p-posts-margin" id="author-name">
							<?php the_author_link(); ?>
						</p>
						<p class="vertical-line">
							|
						</p>
						<p class="p-posts-margin comments-475-none">
							<a href="<?php comments_link(); ?>">Comments</a>	
						</p>
						<p class="vertical-line comments-475-none">
							|
						</p>
						<p class="p-posts-margin" id="date-stamp">
						<?php the_date(); ?>
						</p>
					</div>
				<hr>
					<div class="excerpt-none excerpt-margin excerpt-font"><?php the_excerpt(); ?></div>
			</div>
		</div>
	
<?php $i++; endwhile; ?>
	<p class="post-scroll">
		<?php next_posts_link(); ?>
	</p>
	<p class="post-scroll">
		<?php previous_posts_link(); ?>
	</p>
	
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
		
		</div>
	
	<?php get_sidebar('primary');?>
	
</div>-->

<?php get_footer();?>