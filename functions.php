<?php

/**
 * AGET functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AGET
 */


function carregar_estilos_tema()
{
	// Bootstrap CSS via CDN
	wp_enqueue_style(
		'bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
		array(),
		'5.0.2'
	);

	// style.css do tema
	wp_enqueue_style(
		'style-principal',
		get_stylesheet_uri()
	);
}
add_action('wp_enqueue_scripts', 'carregar_estilos_tema');
