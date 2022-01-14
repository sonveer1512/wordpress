	
	
		<section class="eee">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
					
						<?php dynamic_sidebar( 'sidebar-one' );?>
					</div>
				
					<div class="col-md-4">
					 
						<?php dynamic_sidebar('sidebar-2') ?>
					</div>
						<div class="col-md-4">
					 <h1 class="kpo"></h1>
						<?php dynamic_sidebar('sidebar-3') ?>
					</div>
				</div>
			</div>
		</section>
		<section style="background-color:#eee;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div>
							<?php dynamic_sidebar('sidebar-4') ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php wp_footer();?>
   </body>
</html>