<?php
	get_header();
?>
<?php
	$att2=get_field('dimage');
?>
 
	<section class="ab1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="io">
							<h1 class="jk"><?php the_title();?></h1>
							<img class="lop1" src="<?php echo $att2['url'];?>"/>
							<div class="lop"><p><?php the_content();?></p></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php

  get_footer();
?>