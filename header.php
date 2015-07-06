<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="0iV1DFMj0D1iNKVBoGpt9uE8m6ByrKsJaahfFZtYWCY" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>The Flawless Foundation</title>
<link rel="shortcut icon" href="./wp-admin/images/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Merriweather:400italic,400,300italic,300,700,700italic' rel='stylesheet' type='text/css'>

<?php	
	//global $page, $paged;
	//wp_title( '|', true, 'right' );
	//bloginfo( 'name' );
		//$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
		//echo " | $site_description";
	//?>
</title> 



<?php    if( is_page_template('page-gallery1.php') || is_page_template('page-gallery2.php') || is_page_template('page-gallery3.php'))
    wp_enqueue_script('jTools', 'http://cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js', array('jquery'), '1.2.5');
	 ?>
<?php wp_head(); ?>
</head>
<?php $class = get_custom_body_classes(); ?>
<body <?php body_class($class); ?> >

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62215164-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="wrapper">

<div class="w1">
<div class="w2">
<div id="tb-container">
<div id="topbar">
<div id="hovsocial">
<?php $page_id = of_get_option("social_facebookid"); ?>
<?php if(!empty($page_id)){?>
<a id="fb" href="http://www.facebook.com/<?php echo of_get_option("social_facebook"); ?>" target="_blank"><?php _e( '', 'hv' );   ?>
<?php

$xml = @simplexml_load_file("http://api.facebook.com/restserver.php?method=facebook.fql.query&query=SELECT%20fan_count%20FROM%20page%20WHERE%20page_id=".$page_id."") or die ("a lot");
$fans = $xml->page->fan_count;
echo $fans;
 ?>
</a>
<?php } ?>
<?php $twitterfollowers = of_get_option("social_twitname"); ?>
<?php if(!empty($twitterfollowers)){?>
<a id="tw" href="http://www.twitter.com/<?php echo of_get_option("social_twitname"); ?>" target="_blank"><?php _e( '', 'hv' ); ?> <span id="followers">&nbsp;</span></a>
<?php } ?>

<a id="inst" href="http://www.instagram.com/flawlessfoundation" target="_blank"></a>
<a id="huff" href="http://www.huffingtonpost.com/janine-francolini/" target="_blank"></a>
<a id="yt" href="http://www.youtube.com/user/flawlessfound" target="_blank"></a>
<a id="em" href="mailto:"></a>


</div>
</div>
</div>

<div id="header">
<div class="container">
<div class="nav-holder">
<div class="frame">
<?php wp_nav_menu( array( 'theme_location' => 'menu-main','sort_column' => 'menu_order', 'menu_id' => 'main-nav-menu',  'fallback_cb' => false ) ); ?>
</div>
</div>

<div class="row">
<div class="twelvecol">
<?php if ( of_get_option('hv_logo','true')) : {?>
<strong class="logo"><a href="http://flawlessfoundation.org/">
<?php bloginfo('name'); ?>
</a></strong>
<?php }
		 else: { ?>
<div id="textlogo" class="left">
<h2><a href="http://flawlessfoundation.org/">
<?php bloginfo('name'); ?>
</a></h2>
<span id="sublogo">
<?php bloginfo('description'); ?>
</span> </div>
<?php } endif;?>
</div>
</div>
</div>
</div>