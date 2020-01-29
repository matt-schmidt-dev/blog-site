<?php get_header();?>
<div class="posts-main-container">
	<div class="posts-section">
		<div class="thumbnail-h1-d">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="posts-info-main">
			<div class="posts-info-second">
				<h3 class="posts-h3">
					<?php the_title();?>
				</h3>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
					<p class="p-posts-margin" id="date-stamp">
						<?php the_date(); ?>
					</p>
					<p class="vertical-line">
						|
					</p>
					<p class="p-posts-margin" id="comments-link-number"><a href="<?php comments_link(); ?>">
                    	<?php
                        printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 		get_comments_number() ) ); ?>
                    </a></p>
				</div>

				<?php endwhile; endif; ?>
			</div>
			<div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			    ?>
				<span class="all-single-posts"><?php the_content();?></span>
				
				<?php endwhile; endif; ?>
				
				
				
			</div>
		</div>
		<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				};
				?>
	</div>
	
	<hr>
	
	<?php get_sidebar('primary');?>
	
</div>

<?php get_footer();?>