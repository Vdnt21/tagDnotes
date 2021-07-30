<?php
    require 'header.php';

    if (!isset($_SESSION['userId'])){
        header("Location: index.php?error=nologin");
        exit();
    } else {
?>

<body>
	 
  <!--navbar-->
    <?php
        require 'navbar.php';
        require 'popup.php';
    ?>
     
  <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(notes1.jpg);">
    <div class="container">
      <div class="row align-items-center site-hero-inner justify-content-center">
        <div class="col-md-8 text-center">
          <div class="mb-5 element-animate" style="font-family: 'Yanone Kaffeesatz', sans-serif;">
            <h1>Download and Upload The Notes <i class="fas fa-file-download"></i><i class="fas fa-file-upload"></i></h1>
            <p class="lead">It's very simple to upload and download the notes. just choose upload or download option below and proceed further.</p>
          </div>  
        </div>
      </div>
    </div>

  </section>
  <!-- END section -->
<section style="background-image: url(up1.jpg ) ;">
  <div class="container" >
    <div class="text-center">
      <img src="u.png" height="300px" width="300px" class="img-fluid" alt="TagD'Notes">
    </div>
  </div>

  <form method="POST" action="notesupload.php">
    <div class="text-center">
    
    <button type="submit"  name ="upload" class="btn btn-info btn-lg btn-outline-dark" >UPLOAD <i class="fas fa-file-upload"></i></button>
    </div>
  </form>


  <form method="POST" action="notesdownload.php">
    <div class="text-center">
    <button type="submit" name="download" class="btn btn-warning btn-lg btn-outline-danger" style="margin:35px;">DOWNLOAD <i class="fas fa-file-download"></i></button>
  </div>
  </form>
  </section>
    
  <!--footer-->
    <?php
        require 'footer.php';
    }
    ?>



    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>