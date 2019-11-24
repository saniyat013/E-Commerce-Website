<?php include('includes/header.php'); ?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- products --->
	<div class="products">
		<div class="container">
			<div class="col-md-8 products-right">

				<?php
				include('includes/config.php');

				$sql = "SELECT * FROM message";
				$result = $link->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {


				?>
				<div class="col-md-12 top_brand_left">
				      <h2><?php echo $row["mname"]; ?></h2></a>
              <p><?php echo $row["mbody"]; ?></p>
							<br><br>
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
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- products --->

<?php include('includes/footer.php'); ?>
