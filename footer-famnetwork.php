<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Home Word
 */
?>

		<footer class="intent-footer" role="contentinfo">
			<ul class="three-list group">
				<li>
					<a href="#">Footer Link #1</a>
					<a href="#">Footer Link #2</a>
					<a href="#">Footer Link #3</a>
				</li>
				<li>
					<?php gravity_form( 17, false, false, false, '', false ); ?>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
						<img src = "<?php bloginfo('template_directory'); ?>/_i/homeword-logo-white.png">
					</a>
				</li>
			</ul>
		</footer><!-- #colophon -->
	</div><!-- site-content -->
</div><!--site-->
<div class="modalVideo"><div class="modalContent"></div><a href = "#" class="hideModal">Close</a></div>
<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_famnetwork/famnetwork-min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48079221-1', 'homeword.com');
  ga('send', 'pageview');

</script>
</body>
</html>