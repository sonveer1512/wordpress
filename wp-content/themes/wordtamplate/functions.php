<?php
	register_nav_menus(
		$api =array(
			'word_menu' =>__('word','wordtamplate'),
			'footer2_menu'=>__('footer2','wordtamplate')
		)
	);


	function wordpress_style(){
		
	wp_enqueue_style('wordpress_all',get_theme_file_uri('css/all.min.css'),array(),'4.0.0',false);
	
	wp_enqueue_style('wordpress_bootstrap8',get_theme_file_uri('css/bootstrap.min.css'),array(),'4.0.0',false);
	
	 wp_enqueue_style('wordpress_owl67',get_theme_file_uri('css/owl.carousel.min.css'),array(),'4.0.0',false);
	
	wp_enqueue_style('wordpress_owl19',get_theme_file_uri('css/owl.theme.default.min.css'),array(),'4.0.0',false);
	
	
	wp_enqueue_style('wordpress_style',get_stylesheet_uri('style.css'),array(),'4.0.0',false);
	
	
	// wp_enqueue_script('wordpress_jquery',get_theme_file_uri('js/jquery.slim.min.js'),array(),'4.0.0');
wp_enqueue_script('wordpress_jquery',get_theme_file_uri('js/jquery.min.js'),array(),'4.0.0');
	
	
	wp_enqueue_script('wordpress_popper1',get_theme_file_uri('js/popper.min.js'),array(),'4.0.0');
	
	wp_enqueue_script('wordpress_bootstrap1',get_theme_file_uri('js/bootstrap.min.js'),array(),'4.0.0');
	
	
	
	wp_enqueue_script('wordpress_owl5',get_theme_file_uri('js/owl.carousel.min.js'),array(),'4.0.0');
	
	wp_enqueue_script('wordpress_sweet',get_theme_file_uri('js/sweetalert.min.js'),array(),'4.0.0');
	
	wp_enqueue_script('wordpress_js',get_theme_file_uri('js/style.js'),array(),'4.0.0');
	
	
		
	}

	add_action('wp_enqueue_scripts','wordpress_style');
	
		function twenty_sidebar_registration() {

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
			
				'name'        => __( 'Footerone', 'twenty' ),
				'id'          => 'sidebar-one',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footertwo', 'twenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer3', 'twenty' ),
				'id'          => 'sidebar-3',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer4', 'twenty' ),
				'id'          => 'sidebar-4',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);
}

   add_action( 'widgets_init', 'twenty_sidebar_registration' );


function get_data() {
    $name=$_POST['T_name'];
	$email=$_POST['T_email'];
	$website=$_POST['T_website'];
	$message=$_POST['T_message'];
	
	//echo $website;
	
	$arr = array(
		'post_status' => 'publish',
		'post_type' => 'contact_data',
		'post_title' => $name,
		'post_content' => $website,
	); 
	
	$post_id = wp_insert_post($arr);
	//echo $post_id;
	if(!empty($post_id)){
		add_post_meta($post_id,'email',$email,true);
		add_post_meta($post_id,'message',$message,true);
	}
	
	
	if($post_id){
		echo 1;
	}else{
		echo 0;
	}
	die();
}
	

add_action( 'wp_ajax_nopriv_get_data', 'get_data' );
add_action( 'wp_ajax_get_data', 'get_data' );

		
?>
