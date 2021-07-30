<?php
  require 'header.php';
?>

<body>
   
  <!--navbar-->
  <?php
    require 'navbar.php';
  ?>
     
  <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(notes1.jpg);">
    <div class="container">
      <div class="row align-items-center site-hero-inner justify-content-center">
        <div class="col-md-8 text-center">
          <div class="mb-5 element-animate" style="font-family: 'Yanone Kaffeesatz', sans-serif;">
            <h1>Download The Notes <i class="fas fa-file-download"></i></h1>
            <p class="lead">It's very simple just select your course, semester and subject and Submit it to get your notes.</p>
          </div>  
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
  <section style="background-image: url(up1.jpg );">
  <div class="container">
    <div class="text-center">
      <img src="u.png" height="300px" width="300px" class="img-fluid" alt="TagD'Notes">
    </div>
  </div>


  <?php
  if (isset($_POST['download'])) {
    ?>
    <form class="form-horizontal" action="download-btn.php" method="POST" enctype="multipart/form-data">
             <div class="form-group ">
              <label class="control-label col-sm-2"  >Course:</label>
             <div class="col-sm-10">
               <select name="course" id="course" class="form-control form-control-sm " style="height:40px;">
                  <option selected>COURSE</option>
                  <option name="course" value="BCA">BCA</option>
                  <option name="course" value="BCS-CS">BSC(CS)</option>
                  <option name="course" value="BBA">BBA</option>
                  <option name="course" value="BCOM">B.COM(R)</option>
                  <option name="course" value="BCSE">B.Tech [ C.S.E ]</option>
                  <option name="course" value="BME">B.Tech [ M.E ]</option>
                  <option name="course" value="BEL">B.Tech [ Electrical ]</option>           
                </select>

             </div>
           </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Semester:</label>
              <div class="col-sm-10">
                <select name="semester" id="Semester" class="form-control form-control-sm" style="height:40px;">
                  <option selected>SEMESTER</option>
                  <option name="semester" value="first">First</option>
                  <option name="semester" value="second">Second</option>
                  <option name="semester" value="third">Third</option>
                  <option name="semester" value="fourth">Fourth</option>
                  <option name="semester" value="fifth">Fifth</option>
                  <option name="semester" value="sixth">Sixth</option>
                  <option name="semester" value="seventh">Seventh</option>
                  <option name="semester" value="eighth">Eighth</option>
                </select>
              </div>
            </div>
              <div class="form-group">
               <label class="control-label col-sm-2 ">Subject:</label>
                <div class="col-sm-10">
                 <input  class="form-control form-control-sm" type="text" name="subject" placeholder="ENTER THE SUBJECT NAME">
                </div>
              </div>
              <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" name="submit-btn" class="btn btn-outline-dark btn-success ">SUBMIT</button>
                </div>
              </div>
          
          </form> 
    <?php
        }
  ?>
  </section>

  <!--footerwidth:90px; height:40px;"-->
  <?php
    require 'footer.php';
  ?>



    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>