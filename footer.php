<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>

	<?php get_sidebar(); ?>
	
	<div class="clear"></div>
	<div class="footer">
		<div class="section left">
			<h2>Archives</h2>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</div>
		<div class="section left">
			<h2>Tags</h2>
			<ul>
			<?php wp_list_categories('title_li='); ?>
			</ul>
		</div>
		<div class="section left">
			<h2>Blog</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
				<?php wp_meta(); ?>
			</ul>
		</div>
	</div>
	<div class="clear" style="height: 30px;"></div>

<!-- begin footer -->
</div>

<p><!--<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. --></p>

</div>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/content/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/content/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/content/urlEncode.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/content/prettify/prettify.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/content/metro.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/content/twitter.js"></script>
<script type="text/javascript" src="http://franklin.azurewebsites.net/api/tweets?callback=twitterCallback"></script>
<script type="text/javascript" src="http://www.google.com/jsapi?key=AIzaSyDwQwPYs2aUIeCggSaeuLxeBRRBTGUzDfw"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/content/calendar.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35639877-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_footer(); ?>
</body>
</html>