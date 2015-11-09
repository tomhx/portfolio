<footer id="contact">
	<div class="wrapper">
		<div class="footermain">
			<div class="footleft">
				<h4>Recent Tweets</h4>
				<a class="twitter-timeline" href="https://twitter.com/Thaxell" data-widget-id="662684710519242752">Tweets by @Thaxell</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="footmid">
				<h4>Contact Info</h4>
					<div class="insidefootmid">
						<i class="fa fa-phone"> 416.528.3434</i>
						<i class="fa fa-envelope-o"> contact@tomhaxell.com</i>
						<i class="fa fa-map-marker"> 6-137 Annette St, Toronto</i>
					</div>
			</div>
			<div class="footright">
				<h4>Say Hello</h4>
				<div.formy>
					<?php the_field('contact_form'); ?>
				</div>
			</div>
		</div>		
	</div>
	<div class="wrapper">
		<p class="credits">Site created by Tom Haxell 2015</p>
	</div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script> new WOW().init();</script>

<?php wp_footer(); ?>
</body>
</html>