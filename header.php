<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Proteron_Painéis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php the_field( 'scripts_header', 'option' ); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php the_field( 'scripts_body', 'option' ); ?>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="header">

		<div class="container-fluid g-0">

			<div class="row w-100 align-items-center g-0">

				<div class="col-6 col-md-3">

					<a href="<?php echo get_site_url(); ?>" class="header_logo d-flex justify-content-center">
						<img src="<?php echo get_template_directory_uri() . '/assets/svg/logo.svg'; ?>" class="header_logo-image" alt="Logo da Proteron Painéis" />
					</a>

				</div>

				<div class="col d-none d-md-block">

					<?php
						wp_nav_menu(array(
							'theme_location'    => 'header-menu',
							'depth'             => 2,
							'container'         => 'nav',
							'container_class'   => 'd-flex justify-content-end',
							'container_id'      => 'bs-example-navbar-collapse',
							'menu_class'        => 'nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
					?>

				</div>

				<div class="col d-flex d-md-none justify-content-end">

					<button class="btn btn-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
						<img src="<?php echo get_template_directory_uri() . '/assets/svg/menu-mobile.svg'; ?>" alt="Logo da Proteron Painéis" />
					</button>

					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
						<div class="offcanvas-header">
							<h5 id="offcanvasRightLabel">Offcanvas right</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							...
						</div>
					</div>

				</div>

			</div>

		</div>

	</header><!-- #masthead -->
