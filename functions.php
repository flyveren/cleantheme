<?php
	//Add's custom menu support to theme
	function your_function_name() {
		add_theme_support( 'menus' );
	}
	
	add_action( 'after_setup_theme', 'your_function_name' );
?>

<?php
	//Register the main menu ind backend
	register_nav_menu('main', 'Main navigation menu');
?>