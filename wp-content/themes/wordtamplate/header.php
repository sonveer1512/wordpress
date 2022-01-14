<html>
	<head>
		<title>word tamplate</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head();?>
	</head>
	
	<body>
	

<section style="background-color:#060f29;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="alfa12">
						<h4 class="jp1">Rivington</h4>
						<p class="jp">1 Example Street, Anytown, 10100 USA</p>
					</div>
					
				</div>
				<div class="col-lg-8 col-md-8">
						<div class="alfa13">
							<?php
								$kl =array(
								'menu_class'=>'klp',
								'theme_location'=>'word_menu',
								);
								wp_nav_menu($kl);
							?>
						</div>
					</div>
			</div>
		</div>
	</section>
	
	
	