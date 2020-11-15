<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Energico
 */
?>
<div class="header-container__flex">
	<div class="site-branding">
		<?php energico_header_logo() ?>
		<?php energico_site_description(); ?>
	</div>
	<?php energico_menu_toggle( 'main-menu' ); ?>


	<?php energico_main_menu(); ?>
</div>