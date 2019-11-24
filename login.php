<?php

 if(isset($_POST['submit'])){


		include('includes/config.php');

		// Rrecommeder  function for sequrity issu
		// Chak this point after projact submition.
		$mail = $_POST['mail'];
		$password =  $_POST['password'];
		//3. Database Qure
		$qure = mysqli_query($link , "SELECT * FROM user WHERE email='$mail' AND password='$password';");


		//4. Used Retuned data
		if(mysqli_num_rows($qure) > 0){

			// Start the Login session
			session_start();

				// Set session variables
				$_SESSION["mail"] = $mail;
				$_SESSION["log"] = 1;
				//echo "Log";
				header("Location: index.php");
		}else{
			echo "Email and Password not matched. <br><br>";
		}

		//5. close connection
		mysqli_close($link);
	}

	include('includes/header.php');

?>


<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Form</h2>

			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="login.php" method="post">
					<input name="mail" type="email" placeholder="Email Address" required=" " >
					<input name="password" type="password" placeholder="Password" required=" " >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input name="submit" type="submit" value="submit">
				</form>





			</div>
			<p>Go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->

<?php include('includes/footer.php'); ?>
