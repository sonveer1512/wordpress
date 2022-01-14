<?php
	get_header();
?>

<section class="a1">
	<div class="container">
		<h2 class="mkp">SERVICE</h2>
		<p class="a2">Experience the best of Naperville’s CITYGATE lifestyle and entertainment campus by grabbing one of the exclusive hotel deals at Hotel Arista. the best of Naperville’s CITYGATE lifestyle and entertainment campus by grabbing one of the exclusive hotel deals at Hotel Arista.</p>
		<div class="row">
		<?php
			if(have_posts()){
				$lp=array(
				'post_type'=>'service',
				'post_per_page'=>3
				);
				
				$service=new WP_Query($lp);
				while($service->have_posts()){
					$service->the_post();
					//print_r($service);
					$mn=get_field('image');
					?>
					<div class="col-lg-4 col-md-4">
					
					
				 <a href="<?php echo get_permalink();?>">  <img style="width:100%; height: 350px;" src="<?php echo $mn['url'];?>"/><h1></h1></a>
				   <a href="<?php echo get_permalink();?>"><h1 class="to1"><?php the_title();?></h1></a>
				   <a href="<?php echo get_permalink();?>"><div style="color:#eee; padding-bottom: 160px;"><?php echo get_field ('about');?></div></a>
				   
			    </div>
					<?php
				}
			}
		?>
			
		</div>
	</div>
</section>


<?php
	get_footer();
?>