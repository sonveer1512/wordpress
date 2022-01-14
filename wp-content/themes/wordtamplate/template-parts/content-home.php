<?php get_header();?>
	<section class="container-fluid bjh">
		<div class="row row19">
			<div class="col-lg-6 col-md-6">
				<div class="owl-carousel owl-theme">
					<?php
						if(have_posts()){
							$vb=array(
							'post_type'=>'ser',
							'posts_per_page' => 4,
							);
							$owl=new WP_Query($vb);
							while ($owl->have_posts()){
								$owl->the_post();
								//print_r($owl);
								$np=get_field('image');
								//print_r($np);
								?>
							<a href="<?php echo get_permalink();?>">	<img style="width:100%;" src="<?php echo $np['url'];?>"/></a>
								<?php
							}
						}
					?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="row row19">
					
					<?php
						if(have_posts()){
							$vb=array(
							'post_type'=>'ser',
							'posts_per_page' => 9,
							);
							$owl=new WP_Query($vb);
							while ($owl->have_posts()){
								$owl->the_post();
								//print_r($owl);
								$np=get_field('image');
								//print_r($np);
								?>
								<div class="col-lg-4 col-md-4 cop">
								<div class="bh">
									<a href="<?php echo get_permalink();?>">	<img class="box" src="<?php echo $np['url'];?>"/></a>
									</div>
								</div>
							
								<?php
							}
						}
					?>
			
				
					</div>
				
				
					
			
			</div>
		</div>
	</section>
	<section class="alfa1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="alfa2">
						<div class="alfa4">
							<h1>Award-Winning Modern Mediterranean Style House</h1>
						<h5 class="zx">123 Any Street, HJ 12345</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="alfa3">
						<div class="alfa5">
							<h1>$700,000</h1>
						</div>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<div class="box1">
							<h6 class="box2">Built Year</h6>
							<h1 class="box3">2017</h1>
						</div>
					</div>
					<div class="col-lg-2 col-md-2">
						<div class="box1">
							<h6 class="box2">Bedrooms</h6>
							<h1 class="box3">5</h1>
						</div>
					</div>
					<div class="col-lg-2 col-md-2">
						<div class="box1">
							<h6 class="box2">Bedrooms</h6>
							<h1 class="box3">5</h1>
						</div>
					</div>
					<div class="col-lg-2 col-md-2">
						<div class="box1">
							<h6 class="box2">Stories</h6>
							<h1 class="box3">2</h1>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="box1">
							<h6 class="box2">Sq. ft.</h6>
							<h1 class="box3">3250</h1>
						</div>
					</div>
				</div>
		</div>
		
	</section>
	<section class="mm">
		<div class="container">
				<h1 class="loi">SERVICE</h1>
			<div class="row">
				<?php
				if(have_posts()){
					$mp=array(     
					'post_type'=>'ser',
					'posts_per_page'=>3,
					
					);
					$service=new WP_Query($mp);
					while($service->have_posts()){
						$service->the_post();
						//print_r($service);
						$ml=get_field('image');
						if(get_field('type')==true){
						?>
							<div class="col-md-4 col-lg-4">
								<div class="sd">
									<a href="<?php echo get_permalink();?>">
										<img style="width:100%; height: 350px;" id="lpq" src="<?php echo $ml['url'];?>"/><h1 style="color:#fff;margin-top: 32px;"><?php the_title();?></h1><p class="la"></p>
									</a>
								</div>
							</div>
						<?php
					}
					}	
					}
				
			?>
				
				</div>
			</div>
		</div>
	</section>
	<section class="q1">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5">
					<div class="q2">
						<h1 class="q4">Built for the future.</h1>
					</div>
				</div>
				<div class="col-lg-7 col-md-7">
					<div class="q4">
						<p class="q5">This 5 bedroom, 3 bathroom home has an estimated 4,000 total square feet with nearly 3 acres & its own access to the Haywards River.
							
						</p>
						<p class="q6">Extensive upgrades and thorough maintenance have kept this home in prime condition. Hardwood floors and new carpets create a very comfortable living space.
</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	
	
	
	
	<section>
			<div class="">
				<div class="row">
				
				</div>
				<?php
					if(have_posts()){
						
						while(have_posts()){
							the_post();
							print_r($hoh);
							$cx=get_field('image1');
							?>
								<div>
									<img style="width:100%;" src="<?php echo $cx['url']?>;"/>
								</div>
							<?php
						}
					}
				?>
			</div>
		</section>
		
		
		
		
		
		
			
	<section class="as">
		<div class="container">
			<div class="row">
			<?php
				if(have_posts()){
					$ho=array(
						'post_type'=>'hk',
					);
					$home=new WP_Query($ho);
					while($home->have_posts()){
						$home->the_post();
						//print_r($home);
						$bq=get_field('image');
						
						?>
						
						<div class="col-md-4 col-lg-4">
							<div class="lp">
								<img style="width:100%;"src="<?php echo $bq['url']?>;"/>
							</div>
							
						</div>
						<div class="col-md-4 col-lg-4">
							<div class="lp1">
								<h1 class="pp2"><?php the_title();?></h1>
								<p class="pp1"><?php the_content();?></p>
							</div>
							
						</div>
						<div class="col-md-4 col-lg-4">
							<div class="lp2">
								<h1 style="color:#fff;">Schedule a Private Showing.</h1>
								<h4 style="color:#fff;"><?php echo get_field('team');?></h4>
								<p class="pp5"><?php echo get_field('email');?><br>(123)-456-789</p>
								<p class="pp6"><?php echo get_field('address');?><br> 10100 USA</p>
								<p class="pp7"><?php echo get_field('number');?></p>
							</div>
							
						</div>
						<?php
					}
				}
			?>
				
			</div>
		
		</div>
	</section>
			
	
	

<?php get_footer();?>