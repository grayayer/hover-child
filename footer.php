<div id="footer">
<div class="footer-holder shadow-top">
<div class="footer-frame">
<div class="container footer-columns">
<div class="row">
<?php get_sidebar('footer');?>
</div>
</div>
</div>
</div>
<div class="container social-bar">
<div class="row">
<div class="twelvecol">
<div class="container copyright">
<div class="row">
<div class="twelvecol">
<p><?php echo of_get_option('copyright_info', ''); ?></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$('a[data-rel]').each(function() {
    $(this).attr('rel', $(this).attr('data-rel')).removeAttr('data-rel');
});
</script>
<?php wp_footer(); ?>
<?php if( of_get_option('hv_analytics','true')): { ?>
<?php echo '<script type="text/javascript">'.stripslashes(of_get_option('hv_analytics','')).'</script>'; ?>
<?php }  endif;?>
</body></html>