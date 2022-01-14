
<?php
	get_header();
?>
	<?php
		if(is_page(63)){
			get_template_part('template-parts/content','readability');
		}elseif(is_page(61)){
			get_template_part('template-parts/content','blog');
		}else{
			get_template_part('template-parts/content','home');
		}
	?>



<?php

	get_footer();
?>