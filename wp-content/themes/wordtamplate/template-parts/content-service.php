<?php get_header();?>
<section class="kl1">
	<div class="container">
		<div class="col-lg-8 col-md-8"></div><h2 class="mkp">SERVICE</h2>
		<p class="a2">We offer a range of services to help you achieve the results you’re after. Not sure what you need, or what it costs? We can explain what services are right for you and tell you more about our fees. Get in touch below.</p>
		<div class="row">
			
			<?php
				if(have_posts()){
					$mp=array(
					'post_type'=>'ser',
					'posts_per_page'=>2,
					
					);
					$service=new WP_Query($mp);
					while($service->have_posts()){
						$service->the_post();
						//print_r($service);
						$ml=get_field('image');
						?>
							<div class="col-md-6 col-lg-6">
								<div class="sd">
									<a href="<?php echo get_permalink();?>">
										<img style="width:100%; height: 500px;" src="<?php echo $ml['url'];?>"/><h1 style="color:#fff;margin-top: 32px;"><?php the_title();?></h1><p class="la"><?php the_content();?></p>
									</a>
								</div>
							</div>
						<?php
					}
						
					}
				
			?>

	   </div>
	</div>
	

	
</section>