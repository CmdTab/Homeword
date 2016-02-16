<?php
/**
 * Template name: Download Free
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header('download'); ?>

	<div class="main-content">
		<div class="free-download">
			<div class="med-wrap option-free">
				<svg viewBox="0 0 252.9 367.3">
					<path class="st0" d="M126.4,181.3c-30.8,0-55.8-25-55.8-55.8c0-30.8,25-55.8,55.8-55.8c30.8,0,55.8,25,55.8,55.8
						C182.2,156.3,157.2,181.3,126.4,181.3z M126.4,0C56.6,0,0,56.6,0,126.4c0,69.8,114.4,240.8,126.4,240.8s126.4-171,126.4-240.8
						C252.9,56.6,196.3,0,126.4,0z"/>
				</svg>
				<h1>Free Downloads</h1>
				<p>To unlock any of these free downloads, please enter your email address below.</p>

				<?php gravity_form( get_field('free_form'), false, false, false, '', true ); ?>

				<div class="thank-you">
					<h1>Thank you for signing up!</h1>
					<p>Click on the links below to download your free content</p>
				</div>
			</div>
		</div>
		<div class="download-content">
			<ul class="med-wrap three-list group">
				<li>
					<a href="<?php bloginfo('template_directory'); ?>/_i/free-ch-icon.png" onclick="return false;" download>
						<h1>Free Chapter</h1>
						<img src="<?php bloginfo('template_directory'); ?>/_i/free-ch-icon.png" class="unlocked" />
						<img src="<?php bloginfo('template_directory'); ?>/_i/download-lock.png" class="locked" />
						<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.</p>
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('template_directory'); ?>/_i/free-ch-icon.png" onclick="return false;" download>
						<h1>Summary Page</h1>
						<img src="<?php bloginfo('template_directory'); ?>/_i/summary-icon.png" class="unlocked" />
						<img src="<?php bloginfo('template_directory'); ?>/_i/download-lock.png" class="locked" />
						<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.</p>
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('template_directory'); ?>/_i/free-ch-icon.png" onclick="return false;" download>
						<h1>Small Group Discussion Guide</h1>
						<img src="<?php bloginfo('template_directory'); ?>/_i/small-group.png" class="unlocked" />
						<img src="<?php bloginfo('template_directory'); ?>/_i/download-lock.png" class="locked" />
						<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.</p>
					</a>
				</li>
			</ul>
		</div>

	</div><!-- #main-content -->

<?php get_footer('intentional'); ?>
