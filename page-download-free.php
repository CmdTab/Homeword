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
			<?php if( have_rows('downloadable_content') ): ?>

				<ul class="med-wrap three-list group">
				
					<?php while( have_rows('downloadable_content') ): the_row(); 

						// vars
						$download = get_sub_field('download_file');
						$title = get_sub_field('title');
						$desc = get_sub_field('description');
						$image = get_sub_field('image');

					?>

						<li>
							<a href="<?php echo $download; ?>" class="download-block" onclick="return false;" download>
								<h1><?php echo $title; ?></h1>
								<div class="download-images">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="unlocked" />
									<img src="<?php bloginfo('template_directory'); ?>/_i/download-lock.png" class="locked" />
									<img src="<?php bloginfo('template_directory'); ?>/_i/download.png" class="unlocked download-me" />
								</div>
								<p><?php echo $desc; ?></p>
							</a>
						</li>

					<?php endwhile; ?>

				</ul>

			<?php endif; ?>
				
		</div>

	</div><!-- #main-content -->

<?php get_footer('intentional'); ?>
