<?php
/**
 * @package WordPress
 * @subpackage Eurscva
 * @since 1.0.0
 */
?>

<div class="site-home-block">
	<?php
	$args = array( 'post_type' => 'home-blocks', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div class="site-home-block__item"
			<?php
				$color = get_post_meta($post->ID, 'color', true);
				$link = get_post_meta($post->ID, 'link', true);
				if($color) { echo ' style="background-color:'.$color.'"'; }
			?>
		>
		<?php if($link) { ?><a class="site-home-block__link" href="<?php echo $link ?>"><?php } ?>
			<span class="site-home-block__title">
				<?php the_title(); ?>
			</span>
			<?php
				if ( has_post_thumbnail() ) {
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					echo $featured_img_url;
				}
			?>
		<?php if($link) { ?></a><?php } ?>
		</div>
	<?php endwhile; ?>
</div>
