<?php
/*
Template Name: Upcoming Events
*/
?>
<?php get_header();?>

<div class="container heading-box shadow-top">
<div class="row heading-top">
<div class="twelvecol">
<h1><?php echo get_post_meta($post->ID, 'hv_header_title', true) ?></h1>
<span class="subtitle"><?php echo get_post_meta($post->ID, 'hv_header_subtitle', true) ?></span>

</div>
</div>
</div>
<div class="container">
<div class="row">
<div id="twocolumns">
<div class="row">
<div class="ninecol">
<div id="content">
<div class="posts-holder">
<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $the_query = query_posts(
        array(
            
            'posts_per_page'=>3,
            'orderby'=>'date',
			       'paged'=>$paged,
             'category_name'=>'upcoming_events'
			
        )
    );
    
?>
<?php if (have_posts()) :
   while (have_posts()) :
       the_post(); ?>
<?php $author = get_the_author(); 
       $c = get_the_category();
?>
<div <?php post_class('post-block'); ?> id="post-<?php the_ID(); ?>" >
<div class="box">
<div class="holder">
<div class="image-box">
<?php if(get_post_meta($post->ID, "hv_post_video", true)) {
	echo '<div class="video">';
	echo stripslashes(get_post_meta($post->ID, "hv_post_video", true));
	echo '</div>';       

                                                     } else { ?>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('Blog Pic'); ?>
</a>
<?php } ?>
</div>
<div class="text-box">
<h3><a href="<?php the_permalink() ?>">
<?php the_title(); ?>
</a></h3>
<?php the_excerpt() ?>
<div class="article-footer">
<div class="meta-box">
<p>
<?php the_time('F jS') ?>
by <?php echo $author;?></p>
</div>
<div class="halignright">
<p><a href="<?php the_permalink() ?>"><?php _e( 'Read more', 'hv' ); ?> &raquo;</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php endwhile; endif;?>
</div>
<div class="paging-holder">
<div class="paging-frame">
<?php if (function_exists("pagination")) {
    pagination();
} ?>
<br/>
<br/>
<?php wp_reset_query(); ?>
</div>
</div>
</div>
</div>
<div class="threecol last">
<?php get_sidebar();?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php get_footer();?>