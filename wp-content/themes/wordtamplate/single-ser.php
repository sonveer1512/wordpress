<?php get_header();?>
	<?php $gp=get_field('image');?>
	<?php $pg=get_field('subtitle');?>
	<section class="web2">
		<div class="container">
				<h1 class="web3"><?php the_title();?></h1>
			<div class="row">
					
				<div class="col-md-6 col-ld-6">
					<div>
							
						<img class="web" src="<?php echo $gp['url'];?>"/>
					</div>
				</div>
				<div class="col-md-6 col-ld-6">
					<div>
						<p class="web1"><?php print_r($pg);?></p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	




<?php get_footer();?>