<?php get_header();?>

<section class="loo">
	<div class="container-fluid">
		<div class="row">
			<?php
				if(have_posts()){
					$bl=array(
					'category_name'=>'badroom',
					'post_type'=>'bl',
					 // $taxonomy = 'latest update',
                     // $tax_terms = get_terms($taxonomy),

						
					);
					$blog=new WP_Query($bl);
					while($blog->have_posts()){
						$blog->the_post();
						//print_r($blog);
						$xz=get_field('image');
						?>
							<div class="">
								<a href="<?php echo get_permalink();?>"><h4 class="hk"><?php the_title();?></h4>
								<img style="width:100%;" src="<?php echo $xz['url'];?>"/></a>
								
								<div class="opo">
									<a href="<?php echo get_permalink();?>"><p class=""><?php the_content();?></p></a>
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