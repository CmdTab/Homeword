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
				<?php gravity_form( get_field('free_form'), false, false, false, '', true ); ?>
				<div class="free-download-success">
					<h1>THANK YOU FOR SIGNING UP!</h1>
					<p>Click on the links below to download your free content.</p>
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
