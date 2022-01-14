<html>
	<head>
		<title>new</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		wp_head();
	?>
	</head>
	
	<body>
		<section class="">
			<div class="row row1">
				<div class="col-md-4" style="">
					<div class="head1">
					<h1>Revelar</h1>
					</div>
				</div>
				<div class="col-md-8">
				<div>
				<?php
					
						$wr = array(
						'menu_class'=>'kp',
						
						'theme_location'=>'primary_menu',
						'footer_menu'=>'footer_menu',
						
						);
						wp_nav_menu($wr);
	                ?>
				</div>	
			</div>
			</div>
			
		</section>
	