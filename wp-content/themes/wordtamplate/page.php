<?php get_header();?>

		<?php
		if(is_page(232)){
			get_template_part('template-parts/content','about');
		}elseif(is_page(227)){
			get_template_part('template-parts/content','service');
		}elseif(is_page(211)){
			get_template_part('template-parts/content','contact');
		}elseif(is_page(213)){
			get_template_part('template-parts/content','blog');
		}else{
			get_template_part('template-parts/content','home');
		}
		
	?>
<?php get_footer();?>