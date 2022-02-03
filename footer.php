<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Proteron_Painéis
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2><span>Entre em</span> Contato</h2>
				</div>
			</div>
			<div class="row copyright">
				<div class="col text-center">
					<p>Copyright @ PROTERON 2021 Todos os direitos reservados</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php the_field( 'scripts_footer', 'option' ); ?>

<?php wp_footer(); ?>

</body>
</html>
