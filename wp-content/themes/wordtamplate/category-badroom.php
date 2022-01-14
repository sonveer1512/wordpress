<?php 
	$badcat=get_terms(['taxonomy'=>'category']);
	//print_r($badcat);
	foreach($badcat as $cate){
		
			
	//print_r($cate);
	if(have_posts()){
					$mp=array(     
					'post_type'=>'bl',
					'posts_per_page'=> 3,
					
					);
					$service=new WP_Query($mp);
					while($service->have_posts()){
						$service->the_post();
						//print_r($service);
						$ml=get_field('image');
		?>
			
		
		<?php




	}
	

		
?>