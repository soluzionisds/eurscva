<?php
/**
 * @package WordPress
 * @subpackage Eurscva
 * @since 1.0.0
 * This template load top header
 */
?>
<div class="site-top-header">
  <div class="site-branding site-branding--top-header">
    <div class="site-top-header__left">
      <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div class="widget-column">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
      <?php } ?>
    </div>
    <div class="site-top-header__right">
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
      <?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
        <div class="widget-column">
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div>
      <?php } ?>
      <?php if ( has_nav_menu( 'header' ) ) { ?>
        <nav class="header-navigation" aria-label="<?php esc_attr_e( 'Header Menu', 'twentynineteen' ); ?>">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'header',
              'menu_class'     => 'header-menu',
              'depth'          => 1,
            )
          );
          ?>
        </nav>
      <?php } ?>
    </div>
  </div>
</div>
