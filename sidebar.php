<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin sidebar -->
<div class="sidebarcontainer right">
	
    <ul class="grid">
		<li class="block block-half block-new-row bg-azure">
			<div class="block-icon">
				<a href="mailto: broadcastbabble@gmail.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/content/contact-64.png" /></a>
			</div>
			<h3 class="footnote"><a href="mailto: broadcastbabble@gmail.com">Contact Me</a></h3>
		</li>
		<li class="block block-half block-last-tile bg-ocean">
			<div class="block-icon">
				<a href="http://twitter.com/broadcastbabble" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/content/twitter-64.png" /></a>
			</div>
			<h3 class="footnote"><a href="http://twitter.com/broadcastbabble" target="_blank">Follow Me</a></h3>
		</li>

        <li class="block block-half block-new-row bg-lagoon">
			<div class="block-icon">
				<a href="http://www.linkedin.com/pub/matthew-doig/11/930/642" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/content/linked-64.png" /></a>
			</div>
			<h3 class="footnote"><a href="http://www.linkedin.com/pub/matthew-doig/11/930/642" target="_blank">Link Me</a></h3>
		</li>
		<li class="block block-half block-last-tile bg-volunteer">
			<div class="block-icon">
				<a href="http://feeds.feedburner.com/broadcastbabble" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/content/rss-64.png" /></a>
			</div>
			<h3 class="footnote"><a href="http://feeds.feedburner.com/broadcastbabble" target="_blank">Subscribe</a></h3>
		</li>
        
        <li class="block block-full block-new-row block-last-tile bg-orange">
			<div class="block-content-full">
				<ul id="google_calendar_list"></ul>
			</div>
		</li>
		
        <li class="block block-full block-new-row block-last-tile bg-purple">
			<div class="block-background">
				<a href="http://maps.google.com/maps?q={301 Mallory Station Road, 37067}" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/content/map-bti.png" /></a>
			</div>
			<div class="block-footnote">
				<h3><a href="http://maps.google.com/maps?q={301 Mallory Station Road, 37067}" target="_blank">Location</a></h3>
			</div>
		</li>

        <li class="block block-full block-last-tile block-new-row">
            <div id="slideshow" class="block-background">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/content/gallery-1.jpg" style="margin-top: -30px;" />
                <img src="<?php bloginfo('stylesheet_directory'); ?>/content/gallery-2.jpg" style="margin-top: -30px;" />
                <img src="<?php bloginfo('stylesheet_directory'); ?>/content/gallery-3.jpg" style="margin-top: -30px;" />
                <img src="<?php bloginfo('stylesheet_directory'); ?>/content/gallery-4.jpg" style="margin-top: -30px;" />
                <img src="<?php bloginfo('stylesheet_directory'); ?>/content/gallery-5.jpg" style="margin-top: -30px;" />
			</div>
			<h3 class="footnote"><a href="#">Gallery</a></h3>
		</li>

        <li class="block block-full block-new-row block-last-tile bg-green">
			<div class="block-content-full">
				<h2>My Links</h2>
				<ul class="list-link">
					<li><a href="http://blog.cwa.me.uk">The Morning Brew</a></li>
					<li><a href="http://www.theverge.com">The Verge</a></li>
					<li><a href="http://blogs.msdn.com/b/fsharpteam/">F# Team Blog</a></li>
					<li><a href="http://www.lostremote.com/">Lost Remote</a></li>
				</ul>
			</div>
		</li>
        
        <li class="block block-full block-new-row block-last-tile bg-ocean">
			<div class="block-content-full">
				<h2>Tweets (@broadcastbabble)</h2>
				<ul id="twitter_update_list"></ul>					
			</div>
		</li>

	</ul>

</div>
</div>
<!-- end sidebar -->