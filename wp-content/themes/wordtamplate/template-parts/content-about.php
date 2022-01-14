<?php get_header();?>

<section>
	<div class="container">
		<div class="row">
			<div class="">
			<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
						?>
							<?php the_title();?>
						<?php
					}
				}
			?>

	   </div>
	</div>
	</div>

	
</section>
<?php get_footer();?>