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

				$sql = "SELECT * FROM products WHERE id = '$kye' ";
				$result = $link->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				?>

				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src=<?php echo "images/" . $row["photo"] ?>  class="img-responsive"  >
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<p><b><?php echo $row["name"]; ?></b></p>
					<p><?php echo $row["author"]; ?></p>
					<!-- <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div> -->
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p><?php echo $row["discription"] ?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">$<?php echo $row["price"]   ?></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="<?php echo $row["name"]; ?>">
									<input type="hidden" name="amount" value="<?php echo $row["price"]; ?>">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>
					</div>
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
	</div>

<?php include('includes/footer.php'); ?>
