<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!-- [changed] added class -->
<div class="site-branding site-branding--header" id="navhead">

	<div class="site-branding__left">
		<?php if ( has_custom_logo() ) : ?>
			<div class="site-logo">
				<?php the_custom_logo(); ?>
			</div>
		<?php endif; ?>

		<?php
		$blog_info = get_bloginfo( 'name' );
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty( $blog_info ) ) :
			// [changed] if review
			if ( ! has_custom_logo() ) :
		?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php if ( $description || is_customize_preview() and ! has_custom_logo() ) : ?>
					<p class="site-description">
						<?php echo $description; ?>
					</p>
			<?php endif; ?>
		<?php endif;
			endif; ?>
	</div>

	<div class="site-branding__right">
		<?php if ( has_nav_menu( 'sites' ) ) { ?>
			<nav class="sites-navigation" aria-label="<?php esc_attr_e( 'Sites Menu', 'twentynineteen' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'sites',
						'menu_class'     => 'sites-menu',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php } ?>

		<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'main-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>
	</div>

</div><!-- .site-branding -->
