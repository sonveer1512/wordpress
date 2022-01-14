<?php
	get_header();
?>
<?php 
	$tt2=get_field('Timage');
?>
<section class="f3">
	<img style="width:100%;" src="<?php echo $tt2['url']?>"/>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="">
				
					<h1 class="f2"><?php the_title();?></h1>
					<div class="hjk"><?php the_content();?></div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
	get_footer();
?>