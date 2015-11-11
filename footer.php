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
						<i class="fa fa-phone"></i><h4>416.528.3434</h4>
						<i class="fa fa-envelope-o"></i><h4>tom@tomhaxell.com</h4>
						<i class="fa fa-map-marker"></i><h4>The Junction, Toronto</h4>
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

<?php include_once("analyticstracking.php") ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script> new WOW().init();</script>

<?php wp_footer(); ?>
</body>
</html>