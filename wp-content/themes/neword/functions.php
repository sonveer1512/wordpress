<?php

	register_nav_menus(
			$qr=array(
				
				'primary_menu' => __( 'Primary', 'neword' ),
				'footer_menu' => __( 'footer', 'neword' ),
			)
		);
		
	
	function wordpress_style(){
		
		

	wp_enqueue_style('wordpress_all',get_theme_file_uri('css/all.min.css'),array(),'4.0.0',false);
	wp_enqueue_style('wordpress_bootstrap',get_theme_file_uri('css/bootstrap.min.css'),array(),'4.0.0',false);
	wp_enqueue_style('wordpress_style',get_stylesheet_uri('style.css'),array(),'4.0.0',false);
	
	
	wp_enqueue_script('wordpress_jquery',get_theme_file_uri('js/jquery.min.js'),array(),'4.0.0',false);
	wp_enqueue_script('wordpress_popper',get_theme_file_uri('js/popper.min.js'),array(),'4.0.0',false);
	
	wp_enqueue_script('wordpress_bootstrapj',get_theme_file_uri('js/bootstrap.min.js'),array(),'4.0.0',false);
	}
	
	
	
	add_action ('wp_enqueue_scripts','wordpress_style' );
	function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="%2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
			
				'name'        => __( 'Footerone', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footertwo', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer3', 'twentytwenty' ),
				'id'          => 'sidebar-3',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
}

   add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );
	
	
?>