
<?php get_header();?>
<section style="background-color:#060f29;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="mq10">
					<h5 class="mq11">10 Street Road City  10100 USA</h5>
					<h6 class="mq11">gail@example.com</h6>
					<p class="mq11">mobile.8906347214</p>
				</div>
				
			</div>
		</div>
	</div>

</section>
<section class="sec17">
	<div class="container">
		<h2 class="mq8">OPEN HOUR</h2>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div>
					<?php
			if(have_posts()){
				$mx=array(
				'post_type'=>'con',
				);
				$conect=new WP_Query($mx);
				while($conect->have_posts()){
					$conect->the_post();
					//print_r($conect);
					?>
					<div class="mq1">
						<div class="mq2"><?php the_title();?></div>
						<div class="mq2"><?php echo get_field('startdate');?><?php echo get_field('closedate');?></div>
					</div>
					
							<?php
				}
			}
		?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="mq3">
					<div class="mq4">
						<h2 style="color:#fff;">Send Us a Message</h2>
					</div>
					<div class="mq9">
						<div class="form-group">
							<label for="exampleInputEmail1">NAME</label>
							<input type="text" class="form-control" id="name"  placeholder="Enter name">
							
					  </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
						
					  </div>
					  <div class="form-group">
							<label for="exampleInputEmail1">WEBSITE</label>
							<input type="text" class="form-control" id="web"  placeholder="Enter name">
							
					  </div>
					  <div class="form-group">
							<label for="exampleInputEmail1">MESSAGE</label>
							<input type="text" class="form-control" id="mess"  placeholder="Enter name" cols="3">
							
					  </div>
					  
					  
					  <button id="mit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
		$("#mit").click(function(){
		var name =$("#name").val();
		var email =$("#email").val();
		var website =$("#web").val();
		var message =$("#mess").val();

		// console.log(name);
		// console.log(email);
		// console.log(website);
		// console.log(message);
	
		var obj={
				'T_name':name,
				'T_email':email,
				'T_website':website,
				'T_message':message,	
					};
		//console.log(obj);
		var link='<?php echo admin_url("admin-ajax.php");?>';
		console.log(link);
				$.ajax({
			type:'POST',
			url:link,
			data:{'action': 'get_data','T_name':name,'T_email':email,'T_website':website,'T_message':message},
			success:function(resp){
					//console.log(response);
					if(resp==1){
						swal("Good job!", "Successfull Submit your data!", "success");
						$('.swal-button-container').click(function(){
							location.reload();
						});
					}else{
						swal("Good job!", "Please fill your data!", "error");
					}
			}
		});
	});
});
</script>
<?php get_footer();?>