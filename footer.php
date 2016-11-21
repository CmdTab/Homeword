<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Home Word
 */
?>

		<footer class="site-footer" role="contentinfo">
			<div class="content-wrap">
				<?php do_action( 'homeword_credits' ); ?>
				<ul class="three-list group">
					<li>
						<h3>About HomeWord</h3>
						<p>HomeWord helps families succeed by creating Biblical resources that build strong marriages, confident parents, empowered kids and healthy leaders. Founded by Jim Burns and supported by Doug Fields, HomeWord and Azusa Pacific University have partnered to form The HomeWord Center for Youth and Family. <a href = "<?php echo esc_url( home_url( '/' ) ); ?>about">Learn More &raquo;</a></p>
						<ul class="social ">
							<li>
								<a href = "https://www.facebook.com/Homeword" target="_blank">
									<span aria-hidden="true" data-icon="&#x66;"></span>
									<span class="assistive-text">Facebook</span>
								</a>
							</li>
							<li>
								<a href = "https://twitter.com/drjimburns" target="_blank">
									<span aria-hidden="true" data-icon="&#x74;"></span>
									<span class="assistive-text">Twitter</span>
								</a>
							</li>
							<li>
								<a href = "http://www.pinterest.com/homewordcenter" target="_blank">
									<span aria-hidden="true" data-icon="&#x70;"></span>
									<span class="assistive-text">Pinterest</span>
								</a>
							</li>
							<li>
								<a href = "https://www.instagram.com/homewordatapu/" target="_blank">
									<span aria-hidden="true" data-icon="&#x69;"></span>
									<span class="assistive-text">Instagram</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>About Azusa Pacific University</h3>
						<p>APU is a leading Christian college ranked as one of the nation’s best by U.S. News &amp; World Report and The Princeton Review. Located near Los Angeles in Southern California, APU is a Christian university offering associate’s, bachelor’s, master's, doctoral, and degree completion programs, both on campus and online.  <a href = "<?php echo esc_url( home_url( '/' ) ); ?>about-apu/">Learn More »</a></p>
						<ul class="social">
							<li>
								<a href = "https://www.facebook.com/azusapacific" target="_blank">
									<span aria-hidden="true" data-icon="&#x66;"></span>
									<span class="assistive-text">Facebook</span>
								</a>
							</li>
							<li>
								<a href = "http://twitter.com/azusapacific" target="_blank">
									<span aria-hidden="true" data-icon="&#x74;"></span>
									<span class="assistive-text">Twitter</span>
								</a>
							</li>
							<li>
								<a href = "http://pinterest.com/azusapacific/" target="_blank">
									<span aria-hidden="true" data-icon="&#x70;"></span>
									<span class="assistive-text">Pinterest</span>
								</a>
							</li>
							<li>
								<a href = "http://www.youtube.com/user/UniversityRelations" target="_blank">
									<span aria-hidden="true" data-icon="&#x79;"></span>
									<span class="assistive-text">YouTube</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>Contact Information</h3>
						<ul class="contact-info">
							<li>
								<span aria-hidden="true" data-icon="&#x4c;"></span>
								<p>HomeWord<br />
								PO Box 1600<br />
								San Juan Capistrano, CA<br />
								92693</p>
							</li>
							<li>
								<span aria-hidden="true" data-icon="&#x4d;"></span>
								<p><a href = "/contact-us/">Send us an email</a></p>
							</li>
							<li>
								<span aria-hidden="true" data-icon="&#x54;"></span>
								<p><strong>800-397-9725</strong><br />
								<small>(M-F: 8:30am-5pm PST)</small></p>
							</li>
							<li>

								<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2F<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
							</li>

						</ul>
					</li>
				</ul>
			</div><!-- .content-wrap -->
			<div class="bottom-footer">
				<div class="content-wrap group">
					<ul>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/families/?cat=families">Families</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/church-leaders/?cat=church">Church&nbsp;&nbsp;Leaders</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/about">About</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/store">Store</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/donate">Donate</a>
						</li>
					</ul>
					<div class="copyright">
						Copyright &copy; <?php echo date("Y"); ?> HomeWord. All Rights Reserved.
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- site-content -->
</div><!--site-->
<?php wp_footer(); ?>
<!--<script src="//localhost:35729/livereload.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_js/production.min.js"></script>
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