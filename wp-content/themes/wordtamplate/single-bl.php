<?php
	get_header();
?>
<?php

	$att25=get_field('image');
?>
 
	<section class="loo">
		<div class="container-fluid">
			<div class="row">
				<div class="">
					<div class="">
							<h1 class="cv1"><?php the_title();?></h1>
							<img style="width:100%;" src="<?php echo $att25['url'];?>"/>
							<div class="col-md-10 col-lg-10">
							<div class="bn">
							<p><?php the_content();?></p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php

  get_footer();
?>