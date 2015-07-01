<?php get_header();?>
<div class="container gallery">
	<div class="row">
		<div class="twelvecol">
			<div id="slides">
				<ul class="slide-list">
					<?php
$count = 1;
$i = 0;
$slider_count= 0;
query_posts(array('post_type' =>
					 'slider', 'posts_per_page' => 10)); if (have_posts()) : while (have_posts()) : the_post(); $slider_count++; ?>
					<li class="active color1"><a href="<?php echo get_post_meta($post->ID, 'hv_slider_link', true) ?>"> <?php
if ($detect->
					isMobile()) { the_post_thumbnail('Mobile Slide adip'); } else { the_post_thumbnail(' adip'); }?> </a>
					<div class="text-box">
						<div class="holder">
							<h1><a href="<?php echo get_post_meta($post->ID, 'hv_slider_link', true) ?>"> <?php the_title(); ?>
							</a></h1>
							<?php the_excerpt(); ?>
						</div>
					</div>
					</li>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>
			<div class="switcher-box">
				<div class="holder">
					<ul class="switcher">
						<?php while( $i < $slider_count) {?>
						<li><a href="#"><?php echo $i+1;?>
						</a></li>
						<?php $i++; } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container heading-box shadow-top ">
	<div class="holder message-bar">
		<div class="frame">
			<div class="container">
				<div class="row">
					<div class="twelvecol">
						<p>
<?php echo of_get_option('action_bar', 'hv'); ?>
						</p>
						<span class="bar-subtitle"><?php echo of_get_option('action_sub', 'hv'); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="articles-block">
			<div class="fourcol">
				<?php  $box1_link = of_get_option('box1_link', 'hv');
$box1_permalink = get_permalink( $box1_link ); ?>
				<?php  $box2_link = of_get_option('box2_link', 'hv');
$box2_permalink = get_permalink( $box2_link ); ?>
				<?php  $box3_link = of_get_option('box3_link', 'hv');
$box3_permalink = get_permalink( $box3_link );?>
				
<?php  echo '<a href="'.$box1_permalink.'">'; ?>
				<h2 class="design"><span><?php echo of_get_option('box1_title', 'hv'); ?>
				</span></h2>
				</a>
				<p>
					<?php echo of_get_option('box1_text', ''); ?>
				</p>
			</div>
			<div class="fourcol">
<?php  echo '<a href="'.$box2_permalink.'">'; ?>
				<h2 class="customize"><span><?php echo of_get_option('box2_title', 'hv'); ?>
				</span></h2>
				</a>
				<p>
					<?php echo of_get_option('box2_text', ''); ?>
				</p>
			</div>
			<div class="fourcol last">
<?php  echo '<a href="'.$box3_permalink.'">'; ?>
				<h2 class="compatibility"><span><?php echo of_get_option('box3_title', 'hv'); ?>
				</span></h2>
				</a>
				<p>
					<?php echo of_get_option('box3_text', 'hv'); ?>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="twelvecol">
			<div class="info-section">
				<div class="title-box">
					<div class="holder">
						<h2><span><?php echo of_get_option('featured_posts_title', 'hv'); ?></span></h2>
					</div>
				</div>
				<div class="featured-holder">
					<?php  $featurestag = of_get_option('features_tag', '');?>
					<?php 
										query_posts(array('post_type' =>
					 'gallery', 'tag' => $featurestag, 'posts_per_page'=>9)); if (have_posts()) : ?> <?php $e = 0; 
					while (have_posts()) : the_post(); $e++;
					if( $e == 3) {
						$style3 = 'fourcol last';
						$e = 0;
					}
					else $style3='fourcol';
					?>
					<div class="<?php echo $style3;?>
						">
						<div class="box">
							<div class="frame">
								<div class="image-box">
									<div class="ahover">
										<div>
											<a class="zoom" href="<?php the_permalink(); ?>" ><span>
											<?php the_title(); ?>
											</span>
											<div class="linkimg">
											</div>
											</a>
										</div>
										<?php the_post_thumbnail('Home Pic'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php  $sponsorcheck = of_get_option('sponsor_check');?>
<?php if ($sponsorcheck == 1) {?>
<div id="clients">
<div class="holder">
<div class="container">
	<div class="row">
		<div class="twelvecol">
			<div class="title-box">
				<div class="holder">
					<h2><span><?php echo of_get_option('clients_title', ''); ?>
					</span></h2>
				</div>
			</div>
			<div class="row">
				<div id="clientlist">
					<?php query_posts(array('post_type' =>
					 'sponsor', 'posts_per_page' => 12)); if (have_posts()) : ?> <?php $d = 0;while (have_posts()) : the_post(); $d++;
if( $d == 6) {
	$style2 = 'twocol last';
	$d = 0;
}
else $style2='twocol';
?>
					<div class="<?php echo $style2;?>
						"> <span>
						<a href="<?php echo get_post_meta($post->ID, 'hv_sponsor_link', true) ?>" target= "_blank"><?php the_post_thumbnail(); ?>
						</a>
						</span>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php } ?>
<?php get_footer();?>