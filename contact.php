<?php
  require 'header.php';
?>
	 <!--navbar-->
   <?php
      require 'navbar.php';
      require 'popup.php'
    ?>
     <link rel="stylesheet" href="contact.css">
     <link rel="stylesheet" href="util.css">
     
    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(contact.jpg);">
    	<div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate" style="font-family: 'Yanone Kaffeesatz', sans-serif;">
              <h1>CONTACT US</h1>
              <p class="lead">Have any questions? or Give your valuable feedback here.</p>
              <p class="lead">We'd 💖 to hear from you.</i></p>
            </div>  
          </div>
        </div>
      </div>
  </section>  <!-- END section -->

  

 
<section>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="post" action="includes/contactform.php">
                <span class="contact100-form-title">
                    Send Us A Message
                </span><br>

                <label class="label-input100" for="first-name">Tell us your name *</label>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                    <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name" required>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                    <input class="input100" type="text" name="last-name" placeholder="Last name" required>
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email">Enter your email *</label>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100" type="email" name="email" placeholder="Eg. example@email.com" required>
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="phone">Enter conatct number</label>
                <div class="wrap-input100">
                    <input id="phone" class="input100" type="tel" name="contact" placeholder="Eg. +91-8877892100">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="subject">Subject *</label>
                <div class="wrap-input100 validate-input" data-validate = "Subject here">
                    <input id="email" class="input100" type="text" name="subject" placeholder="Subject" required>
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="message">Message *</label>
                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <textarea id="message" class="input100" name="message" placeholder="Write us a message" required></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn" name="contact-submit">
                        Send Message
                    </button>
                </div>
            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('body11.jpg');">
                <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Address
                        </span>

                        <span class="txt2">
                            Invertis Village,Bareilly-Lucknow National Highway, NH-24, Bareilly, Uttar Pradesh 243123
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span><i class="fas fa-phone"></i></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Lets Talk
                        </span>

                        <span class="txt3">
                            +91-7895147859<br>
                            +91-8887606561
                        </span>
    
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span><i class="fas fa-envelope"></i></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            General Support
                        </span>

                        <span class="txt3">
                            tagdnotes@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section end-->

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