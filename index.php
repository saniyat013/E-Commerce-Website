
<?php include('includes/header.php'); ?>

	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="images/11.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Buy Rice Products Are Now On Line With Us</h3>
				</div>
			</li>
			<li>
				<img src="images/22.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>

			<li>
				<img src="images/44.jpg" alt="" />
				<div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->


<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>New offers</h3>
				<div class="agile_top_brands_grids">

					<?php
					include('includes/config.php');

					$sql = "SELECT * FROM products WHERE catagory='Biography'";
					$result = $link->query($sql);
					$i = 1;
					if ($result->num_rows > 0 ) {

					    // output data of each row
					    while($row = $result->fetch_assoc()) {
								if($i != 1)
									break;
								$i++;

					?>


					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">

								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">

												<a href="single.php?id=<?php echo $row["id"]; ?>"><img src=<?php echo "images/" . $row["photo"]  ?> ></a>
												<p><b><?php echo $row["name"]; ?></b></p>
												<p><?php echo $row["author"]; ?></p>
												<h4>$<?php echo $row["price"]; ?></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
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
									</figure>
								</div>
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
				</div>

				<div class="agile_top_brands_grids">

					<?php
					include('includes/config.php');

					$sql = "SELECT * FROM products WHERE catagory='History'";


					$result = $link->query($sql);
					$i = 1;
					if ($result->num_rows > 0 ) {

							// output data of each row
							while($row = $result->fetch_assoc()) {
								if($i != 1)
									break;
								$i++;

					?>


					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">

								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">

												<a href="single.php?id=<?php echo $row["id"]; ?>"><img src=<?php echo "images/" . $row["photo"]  ?> ></a>
												<p><b><?php echo $row["name"]; ?></b></p>
												<p><?php echo $row["author"]; ?></p>
												<h4>$<?php echo $row["price"]; ?></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
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
									</figure>
								</div>
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
				</div>


				<div class="agile_top_brands_grids">

					<?php
					include('includes/config.php');

					$sql = "SELECT * FROM products WHERE catagory='Travel'";
					$result = $link->query($sql);
					$i = 1;
					if ($result->num_rows > 0 ) {

							// output data of each row
							while($row = $result->fetch_assoc()) {
								if($i != 1)
									break;
								$i++;

					?>


					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">

								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">

												<a href="single.php?id=<?php echo $row["id"]; ?>"><img src=<?php echo "images/" . $row["photo"]  ?> ></a>
												<p><b><?php echo $row["name"]; ?></b></p>
												<p><?php echo $row["author"]; ?></p>
												<h4>$<?php echo $row["price"]; ?></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
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
									</figure>
								</div>
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
				</div>

				<div class="agile_top_brands_grids">

					<?php
					include('includes/config.php');

					$sql = "SELECT * FROM products WHERE catagory='Music'";
					$result = $link->query($sql);
					$i = 1;
					if ($result->num_rows > 0 ) {

							// output data of each row
							while($row = $result->fetch_assoc()) {
								if($i != 1)
									break;
								$i++;

					?>


					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">

								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">

												<a href="single.php?id=<?php echo $row["id"]; ?>"><img src=<?php echo "images/" . $row["photo"]  ?> ></a>
												<p><b><?php echo $row["name"]; ?></b></p>
												<p><?php echo $row["author"]; ?></p>
												<h4>$<?php echo $row["price"]; ?></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
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
									</figure>
								</div>
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
				</div>




						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //new -->

<?php include('includes/footer.php'); ?>
