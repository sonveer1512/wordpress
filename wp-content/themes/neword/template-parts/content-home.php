	

<section class="loo">
	<div class="container">
		<div class="row">
		
		<?php
			if(have_posts()){
				$rvb=array(
				'post_type' =>'blog',
				'posts_per_page' =>2
			);
			
			$blog=new WP_Query($rvb);
			while($blog->have_posts()){
			$blog->the_post();
				//print_r($post);
				
			$att1=get_field('image');
			//print_r($att1);
			?>
			
			<div class="col-lg-6 col-md-6">
				<div class="ko">
					<a href="<?php echo get_permalink();?>"><img src="<?php echo $att1['url'];?>"/></a>
					<div class="koo">
						<h3 ><?php the_title();?></h3>
						<p><?php echo get_field('date');?></p>
					</div>
				</div>
			</div>
			<?php
			}
		}
		?>
		</div>
		<div class="row">
			<?php
				if(have_posts()){
					$list=array(
						'post_type'=>'blog',
						'posts_per_page'=>4
					);
					$kj=new WP_Query($list);
					
					
					
					while($kj->have_posts()){
						$kj->the_post();
					$hj=get_field('image');
						//print_r($post);
						?>
			<div class="col-lg-4 col-md-4">
				<div class="ko">
					<a href="<?php echo get_permalink();?>"><img src="<?php echo $hj['url'];?>"/></a>
					<div class="koo">
						<h3 ><?php the_title();?></h3>
						<p><?php echo get_field('date');?></p>
						
					</div>
				</div>
			</div>
						<?php
					}
				}
			?>
		</div>
		
	</div>
</section>