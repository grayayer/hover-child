<?php
/*
Template Name: Blog Grid
*/
?>
<?php get_header();?>
<div class="container heading-box shadow-top">
	<div class="row heading-top">
		<div class="twelvecol">
			<h1><?php echo get_post_meta($post->
			ID, 'hv_header_title', true) ?></h1>
			<span class="subtitle"><?php echo get_post_meta($post->
			ID, 'hv_header_subtitle', true) ?></span>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="twelvecol">
			<div class="posts-section">
				<div class="blocks-holder">
					<?php 
					$catg = of_get_option('blog_cat', '');
					query_posts(array('posts_per_page' => 8, 'category_name' => 'blog', 'paged' => $paged)); 
					if (have_posts()) : 
					?>
					<?php $c = 0;
					while (have_posts()) : 
						the_post(); $c++;
						if( $c == 4) {
							$style = ' stagr';
							$c = 0;
						}
						else $style=' stagr';
					?>
					<?php $author = get_the_author(); ?>
					<div class="<?php echo $style;?>
						">
						<div class="box">
							<div class="holder">
								<div class="image-box">
									<a href="<?php the_permalink() ?>"> <?php if(get_post_meta($post->
									ID, "hv_post_video", true)) { echo '
									<div class="video">
										'; echo stripslashes(get_post_meta($post->ID, "hv_post_video", true)); echo '
									</div>
									'; } else { ?> <?php the_post_thumbnail('Blog Pic'); ?>
									<?php } ?>
									</a>
								</div>
								<div class="text-box">
									<h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?>
									</a></h3>
									<?php the_excerpt() ?>
									<div class="article-footer">
										<div class="meta-box">
											<p>
												<?php the_time('F jS') ?>
												 by <?php echo $author;?>
											</p>
										</div>
										<div class="halignright">
											<p>
												<a href="<?php the_permalink() ?>"><?php _e( 'Read more', 'hv' ); ?>&raquo;</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; endif;?>
				</div>
			</div>
		</div>
		<div class="nav-previous alignleft">
			<?php next_posts_link( 'Older posts' ); ?>
		</div>
		<div class="nav-next alignright">
			<?php previous_posts_link( 'Newer posts' ); ?>
		</div>
	</div>

	

	<?php wp_reset_query(); ?>

</div>
</div>
</div>
<?php get_footer();?>