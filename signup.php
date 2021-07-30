<?php
	require "header.php";
?>

<head>
	 <!--Font Awesome-->
 <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
  
	<link rel="stylesheet" type="text/css" href="styleSignup.css">

</head>

<body>

	<?php
		require 'navbar.php';
        require 'popup.php';
	?>
           
	<section class="bg">
		<br>
		<div class="container">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">LogIn</button>
				<button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
			</div>
			
			<form action="includes/login.inc.php" method="post" id="login" class="input-group">
				<input type="text" class="input-field" placeholder="User Id" name="mailuid" required>
				<input type="password" class="input-field" placeholder="Enter Password" name="pwd" required>
				<button type="submit" class="submit-btn" name="login-submit">LogIn</button>
                <a href="reset-pwd.php" class="forgotpwd "><span class=" text-info ">Forgot Your Password?</span></a>
			</form>

			<form action="includes/signup.inc.php" method="post" id="register" class="input-group">
            <input type="text" class="input-field" placeholder="Full Name" name="fullname" required>
				<input type="text" class="input-field" placeholder="User Id" name="uid" required>
				<input type="email" class="input-field" placeholder="Email Id" name="mail" required>
				<input type="password" class="input-field" placeholder="Enter Password" name="pwd" required>
				<button type="submit" class="submit-btn" name="signup-submit">Sign Up</button>
			</form>

		</div>
	</div>
	</section>

	<!--footer-->

	
 <?php
    require 'footer.php';
  ?>


 


	<script>
		var x = document.getElementById('login');
		var y = document.getElementById('register');
		var z = document.getElementById('btn');

		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
		}
		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
	</script>

	<!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    


</body>

</html>