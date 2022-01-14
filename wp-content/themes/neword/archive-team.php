<?php
	get_header();
?>

<section class="t1">
	<div class="container">
		<h1 class="kp"></h1>
		<div class="row">
			<?php
			if(have_posts()){
				$as=array(
				'post_type'=>'team ',
				'post_per_page'=>'2'
				);
				
				$team=new WP_Query($as);
				while($team->have_posts()){
					$team->the_post();
					//print_r($team);
					$xp=get_field('Timage');
			
			?>
			<div class="col-lg-6 col-md-6">
				<div>
					<a href="<?php echo get_permalink();?>"><h1 class="xz"><?php the_title();?></h1></a>
					<a href="<?php echo get_permalink();?>"><img style="width:100%; border: 1px solid #fff;padding: 10px; box-shadow: 5px 10px 18px #9686a5;" src="<?php echo $xp['url'];?>"/></a>
					<div class="xz1" >
						<a href="<?php echo get_permalink();?>"><?php the_content();?></a>
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


<?php
	get_footer();
?>