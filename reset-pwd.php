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
	?>
           
	<section class="bg">
		<br>
		<div class="container">
		<div class="form-box">
			<h1 class="text-info text-center">Reset Your Password</h1>
            <hr>
			<p class=" lead ">An e-mail will be sent to you with the instructions on how to reset your password.</p>
			<form action="includes/reset-request.inc.php" method="post">
               <div class="form-group">
                 <label class="lead"> Enter Your Email:</label>
				 <input type="email" class="form-control form-control-lg" name="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
				 <button type="submit" class="btn btn-outline-info btn-lg btn-block" 
                 name="reset-request-submit">Submit</button>             
                </div>
			</form>
			<?php

				if (isset($_GET["reset"])) {
					if ($_GET["reset"] == "success") {
						echo "Check your email!";
					}
				}
			?>

		</div>
		</div>
	</section>

	<!--footer-->
	
 <?php
    require 'footer.php';
 ?>

<!--JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    


</body>

</html>