<?php
  require 'header.php';
?>

<body >

	<!--navbar-->
   <?php
      require 'navbar.php';
      require 'popup.php';
    ?>
     
    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bg1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

             <div class="mb-5 element-animate" style="font-family: 'Yanone Kaffeesatz', sans-serif;">
                  <h1>Welcome to TagD'Notes</h1>
                   <p class="lead">We know sharing and maintaining notes can be hectic as there's sometime too much of them. And thus, here we developed a website to do the both for you.
                   <p class="font-weight-bold lead">With TagD'Notes, take your notes anywhere and everywhere with you.</p>
                   </p>
                  
               </div>  
           </div>
        </div>
      </div>
    </section>
  <!-- END section -->
 
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