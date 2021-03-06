<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<div class="htl_logo"><img src="/wp-content/themes/LVHotTubShow/images/HTL_logo.png" alt="Hot Tub Liquidators!">
				<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
				</div>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">LAS VEGAS<br>HOT TUB SHOW</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">LAS VEGAS<br>HOT TUB SHOW</a></p>
			<?php endif; ?>

			
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<div class="xmastree"></div>
		<div class="menu-scroll-down-pseudo nobg down"><img src="/wp-content/themes/LVHotTubShow/images/down.png" alt="Down Arrow" class="opacity77"></div>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
