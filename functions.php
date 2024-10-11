<?php
/**
 * Theme functions and definitions
 *
 * @package Dhanuka-10up
 * @since Dhanuka-10up 1.0
 */

if ( ! function_exists( 'dhanuka_10up_theme_enqueue_scripts' ) ) {

	/**
	 * Register theme styles and javascript.
	 */
	function dhanuka_10up_theme_enqueue_scripts() {

		$asset_css = include_once get_theme_file_path( 'public/css/app.asset.php' );
		$asset_js  = include_once get_theme_file_path( 'public/js/app.asset.php' );

		wp_enqueue_style( 'dhanuka-10up', get_theme_file_uri( 'public/css/app.css' ), $asset_css['dependencies'], $asset_css['version'] );
		wp_enqueue_script( 'dhanuka-10up', get_theme_file_uri( 'public/js/app.js' ), $asset_js['dependencies'], $asset_js['version'], true );
	}

	add_action( 'wp_enqueue_scripts', 'dhanuka_10up_theme_enqueue_scripts' );
}

if ( ! function_exists( 'dhanuka_10up_theme_editor_styles' ) ) {

	/**
	 * Load editor stylesheets.
	 */
	function dhanuka_10up_theme_editor_styles() {
		add_editor_style(
			array(
				get_theme_file_uri( 'public/css/app.css' ),
			)
		);
	}

	add_action( 'after_setup_theme', 'dhanuka_10up_theme_editor_styles' );

}

if ( ! function_exists( 'dhanuka_10up_theme_editor_assets' ) ) {

	/**
	 * Load editor assets.
	 */
	function dhanuka_10up_theme_editor_assets() {

		$asset_css = include_once get_theme_file_path( 'public/css/editor.asset.php' );

		wp_enqueue_style( 'dhanuka-10up-editor', get_theme_file_uri( 'public/css/editor.css' ), $asset_css['dependencies'], $asset_css['version'] );
	}

	add_action( 'enqueue_block_editor_assets', 'dhanuka_10up_theme_editor_assets' );
}
