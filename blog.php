<?php include('includes/header.php'); ?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Singlepage</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">



				<?php
				include('includes/config.php');
				$kye = $_GET['id'];
				$sql = "SELECT * FROM blog WHERE blogid = '$kye' ";
				$result = $link->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				?>

				<div class="col-md-4 agileinfo_single_left">

				</div>
				<div class="col-md-8 agileinfo_single_right">
				

          <h2><?php echo $row["blogtitle"] ?></h2>
  				<p><?php echo $row["blogdescription"]; ?></p>

        </div>

				<?php   }
					} else {
					    echo "0 results";
					}


					//5. close connection
					mysqli_close($link);
					?>
				<div class="clearfix"> </div>

		</div>
	</div>


<?php include('includes/footer.php'); ?>
