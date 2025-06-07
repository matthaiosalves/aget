<?php

/**
 * AGET functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AGET
 */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


function carregar_estilos_tema()
{
	wp_enqueue_style(
		'bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
		array(),
		'5.0.2'
	);

	wp_enqueue_style(
		'tema-principal',
		get_stylesheet_uri(),
		array('bootstrap-css'),
		filemtime(get_stylesheet_directory() . '/style.css')
	);
}
add_action('wp_enqueue_scripts', 'carregar_estilos_tema');

if (function_exists('acf_add_options_page')) {
	// Página principal de opções
	acf_add_options_page(array(
		'page_title'    => 'Opções do Tema',
		'menu_title'    => 'Opções do Tema',
		'menu_slug'     => 'opcoes-do-tema',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	// Subpágina para o Footer
	acf_add_options_sub_page(array(
		'page_title'    => 'Rodapé',
		'menu_title'    => 'Rodapé',
		'parent_slug'   => 'opcoes-do-tema',
		'menu_slug'     => 'opcoes-footer',
	));
}

function registrar_menu()
{
	register_nav_menus([
		'menu-principal' => 'Menu Principal',
	]);
}
add_action('after_setup_theme', 'registrar_menu');

add_theme_support('post-thumbnails');
