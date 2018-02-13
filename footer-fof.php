	<footer class="fof">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/fitzrovia-logo.png" class="footer-logo" />
			</div>
			
			<div class="col-md-6">
				<ul class="social">
					<li><a href="https://www.facebook.com/enjoyfitzrovia" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" border="0" /></a></li>
					<li><a href="https://twitter.com/enjoyfitzrovia" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" border="0" /></a></li>
					<li><a href="https://instagram.com/enjoyfitzrovia" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" border="0" /></a></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			<div class="row">
				<div class="col-md-12">
					&copy; Copyright The Fitzrovia Partnership <?php echo date('Y'); ?> - Terms &amp; Conditions - Privacy Policy
				</div>
			</div>
		</div>
	</footer>
	</div>
		</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>	

	<script>
		$(document).ready(function(){
			$('.rest-image').click( function() {
			   $(this).siblings(".rest-info").toggleClass("open");
			} );
		});
	</script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/sidebarEffects.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-41371371-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
	
	<?php wp_footer(); ?>
</body>
</html>