<?php


		add_action( 'wp_enqueue_scripts', 'theme_name_style' );

		function theme_name_style() {
			wp_enqueue_style( 'main-style', get_stylesheet_uri() );
			wp_enqueue_style( 'pricelist', get_template_directory_uri() . '/pricelist.css' );
			wp_enqueue_style( 'order-page', get_template_directory_uri() . '/order-page.css' );
			wp_enqueue_style( 'cat-sv-one', get_template_directory_uri() . '/sv-cat-one.css' );
			wp_enqueue_style( 'cat-sv-two', get_template_directory_uri() . '/sv-cat-two.css' );
			wp_enqueue_style( 'cat-sv-three', get_template_directory_uri() . '/sv-cat-three.css' );
			wp_enqueue_style( 'about-us', get_template_directory_uri() . '/about-us.css' );
			wp_enqueue_script('jquery');
			wp_enqueue_script('popup-call', get_template_directory_uri() . '/assets/js/popup-call.js');
			wp_enqueue_script('differents-scipts', get_template_directory_uri() . '/assets/js/script.js');
		}

		add_theme_support('custom-logo');
		add_theme_support( 'title-tag' );

 ?>
