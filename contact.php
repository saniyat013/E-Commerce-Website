<?php
  if(isset($_POST['submit']))
  {
    include('includes/config.php');

    // Rrecommeder a function for sequrity issu
    // Have to chak this issu after projact 1st submitino.

    $mbody =  $_POST['message'];
    $mname =  $_POST['name'];
    $memail = $_POST['memail'];




      //3. Database Qure
        $sql = "INSERT INTO message (mbody, mname, memail)
      VALUES ('$mbody', '$mname', '$memail')";
}

  include('includes/header.php');
?>


<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="about">
		<p align="center">
		<?php
		if(isset($_POST['submit']))
		{
		//4. Used Retuned data
		if(mysqli_query($link, $sql)){
				echo "Thanks for your feedback";
		} else{
				echo "ERROR: Could not able to execute $sql. ";
		}

	//5. close connection
		mysqli_close($link);

}

		 ?>
	 </p>
	 <br>

		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 w3_agileits_contact_grid_left">
				<div class="agile_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.84422971417!2d90.37567781473594!3d23.75293358458816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2z4Kah4KeN4Kav4Ka-4Kar4KeL4Kah4Ka_4KayIOCmhuCmqOCnjeCmpOCmsOCnjeCmnOCmvuCmpOCmv-CmlSDgpqzgpr_gprbgp43gpqzgpqzgpr_gpqbgp43gpq_gpr7gprLgpq_gprw!5e0!3m2!1sbn!2sbd!4v1523266577592" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="agileits_w3layouts_map_pos">
					<div class="agileits_w3layouts_map_pos1">
						<h3>Contact Info</h3>
						<p>1234k Avenue, 4th block, New York City.</p>
						<ul class="wthree_contact_info_address">
							<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+(0123) 232 232</li>
						</ul>
						<div class="w3_agile_social_icons w3_agile_social_icons_contact">
							<ul>
								<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
								<li><a href="#" class="icon icon-cube agile_rss"></a></li>
								<li><a href="#" class="icon icon-cube agile_t"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">Leave a<span> Message</span></h2>

				<form action="contact.php" method="post" id="problem">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="name" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Your Name</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-26" name="memail" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Your Email</span>
						</label>
					</span>
					<textarea name="message" placeholder="Your message here..." required=""></textarea>
					<input type="submit" value="submit" name="submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- contact -->

<?php include('includes/footer.php'); ?>
