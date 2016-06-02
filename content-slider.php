<?php
/**
 * The template used for displaying the slider
 *
 * @package Home Word
 */
	$whichSlider = get_field('which_slider');
	$args = array( 'post_type' => 'sliders', 'posts_per_page' => 1, 'name' => $whichSlider);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>

				<div id="carousel" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner <?php echo $whichSlider; ?>">
<?php
		$rows = get_field('slide');
		$i = 1;
		foreach($rows as $row) {
			echo '<div class="item';
			if($i == 1) {
				echo ' active';
			}
			if($row['slide_gradient'] === 'dark') {
				echo ' dark-gradient';
			}
			if($row['slide_gradient'] === 'blue') {
				echo ' blue-gradient';
			}
			if($row['slide_gradient'] === 'none') {
				echo ' no-gradient';
			}
			echo '">';
			echo '<a href = "' .$row['slide_url']. '" class="slide-link">';
			echo '<img src = "' .$row['slide_image']. '">';
			echo '<div class="carousel-caption">';
			if($row['slide_text_color'] === 'black') {
				echo '<div class="black-text"><h1>' . $row['slide_title'] . '</h1>';
			} elseif($row['slide_text_color'] === 'white') {
				echo '<div class="white-text"><h1>' . $row['slide_title'] . '</h1>';
			} else {
				echo '<div><h1>' . $row['slide_title'] . '</h1>';
			}
			echo '<p>' . $row['slide_subtitle'] . '</p>';
			echo '<span href = "' .$row['slide_url']. '" class="carousel-action ' .$row['slide_button_color']. '">' . $row['slide_button'] . '</span>';
			echo '</div></div>';
			echo '</a></div>';
			$i++;
		}
	endwhile;
?>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel" data-slide="prev">
					<span aria-hidden="true" data-icon="&#x6c;"></span>
					</a>
					<a class="right carousel-control" href="#carousel" data-slide="next">
					<span aria-hidden="true" data-icon="&#x72;"></span>
					</a>
				</div>
