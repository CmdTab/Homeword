<?php
/**
 * Template name: Fam Network
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header('famnetwork'); ?>
	<div class="main-content">
		<div class="get-connected">
			<h1>Here's how to get connected</h1>
			<ul class="three-list group">
				<li class="group">
					<h3>Sign Up</h3>
					<p>This is a paragraph that will contain a part of how to get connected. Don't make it very long.</p>
					<a href="#" class="purple-btn btn">Free</a>
					<a href="#" class="clear-btn btn">Premium</a>
				</li>
				<li class="group">
					<h3>Log In</h3>
					<p>This is a paragraph that will contain a part of how to get connected. Don't make it very long.</p>

					<?php 
						//get_template_part(‘icon’ , ‘plus’);
						include('svg/icon-newsletter.php');
					?>

				</li>
				<li class="group">
					<h3>Get Started</h3>
					<p>This is a paragraph that will contain a part of how to get connected. Don't make it very long.</p>
					<a href="#" class="purple-btn btn">View Resources</a>
				</li>
			</ul>
			<img src="<?php bloginfo('template_directory'); ?>/_i/connected-purple.png" class="upgrade-icon" />
		</div>
		<div class="join-free group">
			<div class="half full-box group">
				<div class="full-box-bg">
					<h1>You can<br /> join for free</h1>
					<hr />
					<h4>secondary headline statement goes here</h4>
					<ul>
						<li>Parent Newsletter Builder</li>
						<li>Weekly Podcast</li>
						<li>Support &amp; Idea Forum</li>
						<li>Parent Newsletter Builder</li>
						<li>Weekly Podcast</li>
						<li>Support &amp; Idea Forum</li>
					</ul>
					<a href="#" class="orange-btn btn">Sign Up Now</a>
					<a href="#" class="clear-btn btn">Upgrade to Premium</a>
				</div>
			</div>
			<div class="half group">
				<div class="half mini-box info-card flip-container">
					<div class="flipper">
						<div class="front">
							<a href="#" class="turn-btn">
								<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
							</a>
							<h2>Parent Newsletter</h2>
							<hr />
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-newsletter.php');
							?>
						</div>
						<div class="back">
							<a href="#" class="turn-btn">
								<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
							</a>
							<h2>Parent Newsletter</h2>
							<hr />
							<p>This is the back of the card</p>
						</div>
					</div>
				</div>
				<div class="half mini-box info-card flip-container">
					<div class="flipper">
						<div class="front">
							<a href="#" class="turn-btn">
								<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
							</a>
							<h2>Weekly Podcast</h2>
							<hr />
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-podcast.php');
							?>
						</div>
						<div class="back">
							<a href="#" class="turn-btn">
								<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
							</a>
							<h2>Weekly Podcast</h2>
							<hr />
							<p>This is the back of the card</p>
						</div>
					</div>
				</div>
				<div class="mini-box full info-card flip-container">
					<div class="flipper">
						<div class="front">
							<a href="#" class="turn-btn">
								<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
							</a>
							<h2>Support/Idea Forum</h2>
							<hr />
								<?php 
									//get_template_part(‘icon’ , ‘plus’);
									include('svg/icon-forum.php');
								?>
						</div>
						<div class="back">
							<a href="#" class="turn-btn">
								<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
							</a>
							<h2>Weekly Podcast</h2>
							<hr />
							<p>This is the back of the card</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="what-we-believe">
			<h1>Here's what we believe</h1>
			<h4>members of the network commit to strengthening these four areas of family ministry</h4>
			<ul class="four-list group">
				<li class="strong-marriage">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3>Strong Marriages</h3>
									<hr>
								</div>
							</div>
							<div class="back">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3>Strong Marriages</h3>
									<hr>
									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="empowered-kids">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3>Empowered Kids</h3>
									<hr>
								</div>
							</div>
							<div class="back">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3>Empowered Kids</h3>
									<hr>
									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="confident-parents">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3>Confident Parents</h3>
									<hr>
								</div>
							</div>
							<div class="back">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3>Confident Parents</h3>
									<hr>
									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="healthy-leaders">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3>Healthy Leaders</h3>
									<hr />
								</div>
							</div>
							<div class="back">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3>Healthy Leaders</h3>
									<hr>
									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="upgrade-premium group">
			<div class="upgrade-top">
				<img src="<?php bloginfo('template_directory'); ?>/_i/upgrade-icon.png" class="upgrade-icon" />
				<ul class="three-list group">
					<li>
						<h1>Upgrade to Premium</h1>
						<hr />
						<h4>Secondary Heading</h4>
						<a href="#" class="orange-btn btn top">Upgrade Now ($8.99/month)</a>
						<a href="#" class="clear-btn btn top">Join for Free</a>
					</li>
					<li>
						<p>
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-check.php');
							?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-check.php');
							?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-check.php');
							?>
							Lorem Ipsum dolor sit amet
						</p>
					</li>
					<li>
						<p>
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-check.php');
							?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-check.php');
							?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php 
								//get_template_part(‘icon’ , ‘plus’);
								include('svg/icon-check.php');
							?>
							Lorem Ipsum dolor sit amet
						</p>
					</li>
				</ul>
				<a href="#" class="orange-btn btn bottom">Upgrade Now ($8.99/month)</a>
				<a href="#" class="clear-btn btn bottom">Join for Free</a>
			</div>
			<div class="upgrade-bottom">
				<!-- <img src="<?php // bloginfo('template_directory'); ?>/_i/premium-bg.jpg" /> -->
				<ul class="four-list upgrade-boxes group">
					<li class="monthly-downloads">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Monthly Downloads</h2>
									<?php	include('svg/icon-cloud.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Healthy Leaders</h3>
										<hr>
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>	
					</li>
					<li class="online-training">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Online Training</h2>
									<?php	include('svg/icon-lightbulb.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Online Training</h3>
										<hr>
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="resource-discounts">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Resource Discounts</h2>
									<?php	include('svg/icon-discount.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Resource Discounts</h3>
										<hr>
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="premarital-app">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Premarital App</h2>
									<?php	include('svg/icon-app.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Resource Discounts</h3>
										<hr>
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
			<div class="exclusive-pricing">
				<h1>Premium Member's Exclusive Pricing</h1>
				<h4>browse our extensive library of discounted family ministry resources</h4>
				<hr />
			</div>
		</div>
		<div class="resources group">
			
		  	<!-- Nav tabs -->
			<ul class="nav nav-tabs group" role="tablist">
				<li role="presentation" class="active">
					<a href="#home" aria-controls="home" role="tab" data-toggle="tab">
						<?php include('svg/icon-marriage.php'); ?>
						<h3>Strong Marriages</h3>
					</a>
				</li>
				<li role="presentation">
					<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
						<?php include('svg/icon-kids.php'); ?>
						<h3>Empowered Kids</h3>
					</a>
				</li>
				<li role="presentation">
					<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
						<?php include('svg/icon-confident.php'); ?>
						<h3>Confident Parents</h3>
					</a>
				</li>
				<li role="presentation">
					<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
						<?php include('svg/icon-leaders.php'); ?>
						<h3>Healthy Leaders</h3>
					</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content group">
				<div role="tabpanel" class="tab-pane group active" id="home">
					<div class="resource-forty">
						<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
							<?php include('svg/icon-marriage.php'); ?>
							<h3>Strong Marriages</h3>
						</a>
					</div>
					<div class="resource-sixty">
						<ul class="half">
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Lorem ipsum dolor sit amet
							</li>
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Strong Marriages
							</li>
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Lorem ipsum dolor sit amet
							</li>
						</ul>
						<div class="half">
							<a href="#" class="white-btn btn">view resources</a>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane group" id="profile">
					<div class="resource-forty">
						<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
							<?php include('svg/icon-kids.php'); ?>
							<h3>Empowered Kids</h3>
						</a>
					</div>
					<div class="resource-sixty">
						<ul class="half">
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Lorem ipsum dolor sit amet
							</li>
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Empowered Kids
							</li>
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Lorem ipsum dolor sit amet
							</li>
						</ul>
						<div class="half">
							<a href="#" class="white-btn btn">view resources</a>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane group" id="messages">
					<div class="resource-forty">
						<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
							<?php include('svg/icon-confident.php'); ?>
							<h3>Confident Parents</h3>
						</a>
					</div>
					<div class="resource-sixty">
						<ul class="half">
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Lorem ipsum dolor sit amet
							</li>
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Confident Parents
							</li>
							<li>
								<?php	include('svg/icon-check.php'); ?>
								Lorem ipsum dolor sit amet
							</li>
						</ul>
						<div class="half">
							<a href="#" class="white-btn btn">view resources</a>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane group" id="settings">
					<div class="testing">
						<div class="resource-forty">
							<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
								<?php include('svg/icon-leaders.php'); ?>
								<h3>Healthy Leaders</h3>
							</a>
						</div>
						<div class="resource-sixty">
							<ul class="half">
								<li>
									<?php	include('svg/icon-check.php'); ?>
									Lorem ipsum dolor sit amet
								</li>
								<li>
									<?php	include('svg/icon-check.php'); ?>
									Healthy Leaders
								</li>
								<li>
									<?php	include('svg/icon-check.php'); ?>
									Lorem ipsum dolor sit amet
								</li>
							</ul>
							<div class="half">
								<a href="#" class="white-btn btn">view resources</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- end tabs -->

		</div>
	</div><!-- #main-content -->

<?php get_footer('famnetwork'); ?>
