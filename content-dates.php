<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Home Word
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
<?php if( have_rows('seminar') ): ?>
	<ul class="date-list">
<?php	// loop through the rows of data
	while ( have_rows('seminar') ) : the_row();
	$contact_name = get_sub_field('seminar_contact');
	$contact_email = get_sub_field('seminar_contact_email');
	$contact_phone = get_sub_field('seminar_contact_phone');
	$contact_url = get_sub_field('seminar_contact_url');
	$startdate = DateTime::createFromFormat('Ymd', get_sub_field('seminar_start_date'));
	//$startdate->format('d-m-Y');
	$enddate = DateTime::createFromFormat('Ymd', get_sub_field('seminar_end_date'));
	//$startdate->format('d-m-Y');
?>
		<li class="group">
			<div class="date-info">
				<h2><?php echo $startdate->format('M d'); ?></h2>
				<span class="start-time">at <?php the_sub_field('seminar_start_time'); ?></span>
				<div class="end-info">
					<span class="end-label">Ending</span>
					<?php echo $enddate->format('M d'); ?> @ <?php the_sub_field('seminar_end_time'); ?>
				</div>
			</div>
			<div class="date-details">
				<a href = "<?php the_sub_field('seminar_url'); ?>" class="event-title">
					<?php the_sub_field('seminar_title'); ?>
				</a>
				<div class="event-presenter">Presented by: <?php the_sub_field('seminar_presenter'); ?></div>
				<div class="event-location"><?php the_sub_field('seminar_location'); ?></div>
				<div class="event-address"><?php the_sub_field('seminar_address'); ?></div>
				<ul class="event-contact group">
					<?php if($contact_name) : ?>
						<li>
							<span aria-hidden="true" data-icon="&#x6b;"></span>
							<?php echo $contact_name; ?>
						</li>
					<?php endif; ?>
					<?php if($contact_email) : ?>
						<li>
							<span aria-hidden="true" data-icon="&#x4e;"></span>
							<a href = "mailto:<?php echo $contact_email; ?>">Email address</a>
						</li>
					<?php endif; ?>
					<?php if($contact_phone) : ?>
						<li>
							<span aria-hidden="true" data-icon="&#x61;"></span>
							<?php echo $contact_phone; ?>
						</li>
					<?php endif; ?>
					<?php if($contact_url) : ?>
						<li>
							<span aria-hidden="true" data-icon="&#x77;"></span>
							<a href = "<?php echo $contact_url; ?>">Visit website</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>

		</li>
<?php
	endwhile;
endif; ?>
		<?php the_content(); ?>
		<?php if( have_rows('snippet') ): ?>
			<ul class="about-snippets group">
			<?php while( have_rows('snippet') ): the_row();
				$image = get_sub_field('snippet_icon');
				$title = get_sub_field('snippet_title');
				$desc = get_sub_field('snippet_description');
				$link = get_sub_field('link_location');
				if($link === 'page') {
					$url = get_sub_field('snippet_url');
				} else {
					$url = get_sub_field('snippet_custom_url');
				}
				$text = get_sub_field('snippet_action_text');
			?>
				<li>
					<a href = "<?php echo $url; ?>">
						<img src = "<?php echo $image; ?>">
						<h3><?php echo $title; ?></h3>
						<p><?php echo $desc; ?></p>
						<span><?php echo $text; ?></span>
					</a>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php the_field('bottom_content'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'homeword' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'homeword' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
