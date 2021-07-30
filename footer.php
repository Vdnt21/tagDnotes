<style>
    footer{
        font-family: 'Kanit', sans-serif;
    }

</style>


<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4"> Developed with <i class="fas fa-heart heart" aria-hidden="true"></i> By:</h5>
        <p id="dev">Nikhil Joshi ,Vedant Singh and Vishal Awasthi</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">Quick Links</h5>

        <ul class="list-unstyled ">
          <li>
            <p >
              <a class="cl" href="index.php" ><i class="fas fa-home mr-auto "></i> Home</a>
            </p>
          </li>

          <?php if (isset($_SESSION['userId'])){ ?>
            <li>
              <p >
                <a class="cl" href="notes.php" name="notes"><i class="fas fa-book-open"></i> Notes</a>
              </p>
            </li>
          <?php } ?>

          <li>
            <p >
              <a class="cl" href="about.php"><i class="fas fa-file-alt mr-auto "></i> About</a>
            </p>
          </li>
          <li>
            <p >
              <a  class="cl" href="contact.php" ><i class="fas fa-envelope mr-auto "></i> Contact</a>
            </p>
          </li>
          <?php if (!isset($_SESSION['userId'])){ ?>
          <li>
            <p >
              <a class="cl" href="signup.php" i><i class="fas fa-user-plus mr-auto "></i> Login</a>
            </p>
          </li>
        <?php } ?>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p >
              <i class="fas fa-map-marker-alt mr-auto "></i> Bareilly, Uttar Pradesh 243123</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-auto "></i> tagdnotes@gmail.com</p>
          </li>
          <li>
            <p >
              <i class="fas fa-phone mr-auto "></i> +91-7895147859</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-auto "></i> +91-8887606561</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

       
        <div class="social-buttons">        
                <!-- facebook  Button -->
                <a href="https://www.facebook.com/TagDNotes/" target="blank" class="social-margin"> 
                  <div class="social-icon facebook">
                    <i class="fab fa-facebook" aria-hidden="true"></i> 
                  </div>
                </a>
                
                <!-- LinkedIn Button -->
                <a href="https://www.linkedin.com/in/nikhil-joshi-60984114b/" class="social-margin" target="blank">
                  <div class="social-icon linkedin">
                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                  </div> 
                </a>
              <!-- Github Button -->
                <a href="https://github.com/static-coder"  target="blank"  class="social-margin">
                  <div class="social-icon github">
                    <i class="fab fa-github-alt" aria-hidden="true"></i>
                  </div>
                </a>
                <!-- whatsapp Button -->
                <a href="https://api.whatsapp.com/send?phone=917895147859" target="blank"  class="social-margin">
                  <div class="social-icon whatsapp">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                  </div> 
                </a>
                <!-- instagram Button -->
                <a href="https://www.instagram.com/tagdnotes/" target="blank"  class="social-margin">
                  <div class="social-icon instagram">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                  </div>
                </a>

                 <!-- TwitterButton -->
                 <a href="https://twitter.com/itsNikhil_Joshi" target="blank" class="social-margin">
                  <div class="social-icon twitter">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                  </div> 
                </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy; 2020 All Rights Reserved By :
    <a href="#" id="cp"> TagD'Notes</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->