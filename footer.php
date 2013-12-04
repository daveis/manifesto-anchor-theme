	<footer class="site-footer clearfix">
		<div class="container">
			<p class="site-copyright">&copy; <?php echo date("Y"); ?> <?php echo site_name(); ?></p>
			<p class="site-credits">Built with <a href="http://anchorcms.com">Anchor CMS</a>, <a href="http://getskeleton.com">Skeleton</a>, &amp; <a href="http://jpanelmenu.com">JPanelMenu</a>.</p>
		</div>
	</footer>

		<!-- jQuery freshly squeezed -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- If they're out, grab some locally -->
		<script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>

		<!-- Custom JS -->
		<script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/jpanelmenu.min.js'); ?>"></script>

		<!-- All your data are belong to us -->
		<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXXXX-XX']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
	</body>
</html>