
<?php
  
  //LOGIN SUCCESS POPUP
   if (isset($_GET["login"])) {
    if ($_GET["login"] == "success") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          icon: 'success',
          title: 'Login Successful',
          text: 'You logged in successfully!',
          timer: 3000
        })
      </script>

      <?php
    }
  } else if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
    ?>

    <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "You left some fields empty!",
          timer: 3000
        });
    </script>

    <?php
        } else if ($_GET["error"] == "wrongpwd") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "Wrong Password!",
          timer: 3000
        })
      </script>

      <?php
    } else if ($_GET["error"] == "nouser") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "No such user exists!",
          timer: 3000
        })
      </script>

      <?php
    }
  }
?>


<?php
  //SIGNUP SUCCESS POPUP
  if (isset($_GET["signup"])) {
    if ($_GET["signup"] == "success") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          icon: 'success',
          title: 'Signup Successful',
          text: 'You signed up successfully!',
          timer: 3000
        })
      </script>

      <?php
    }
  } else if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyfields") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "You left some fields empty!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "invalidmail&uid") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "Invalid Username or E-Mail address!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "invalidmail") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "Invalid E-Mail address!",
          timer: 3000
        });
      </script>

      <?php
    }  else if ($_GET["error"] == "invaliduid") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "Invalid Username!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "usertakenoremailtaken") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "Username or E-Mail address taken!",
          timer: 3000
        });
      </script>

      <?php
    }   
  }
?>


<?php
  //Contact Form popup
  if (isset($_GET["mailsent"])) {
    if ($_GET["mailsent"] == "success") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          icon: 'success',
          title: 'Sent',
          text: 'Your E-Mail has been sent successfully!',
          timer: 3000
        })
      </script>

      <?php
    } else if ($_GET["mailsent"] == "failed") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "An error occurred while sending the mail!",
          timer: 3000
        });
      </script>

      <?php
    }   
  }
?>

<?php
  //Notes Upload popup
  if (isset($_GET["upload"])) {
    if ($_GET["upload"] == "success") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          icon: 'success',
          title: 'Upload Successful',
          text: 'Your notes have been uploaded successfully!',
          timer: 3000
        })
      </script>

      <?php
    }
  } else if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "You left some fields empty!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "filetoobig") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "File Size too big!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "uploaderror") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "An error occurred while uploading the notes!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "invalidfile") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "Invalid File Type!",
          timer: 3000
        });
      </script>

      <?php
    }
  }
?>

<?php
  //Notes Download popup
  if (isset($_GET["upload"])) {
    if ($_GET["upload"] == "success") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          icon: 'success',
          title: 'Upload Successful',
          text: 'Your notes have been uploaded successfully!',
          timer: 3000
        })
      </script>

      <?php
    }
  } else if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "You left some fields empty!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "nonotes") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "No such notes exist!",
          timer: 3000
        });
      </script>

      <?php
    } else if ($_GET["error"] == "notesnotavailable") {
      ?>

      <script type="text/javascript">
        Swal.fire({
          imageUrl: 'error.png',
          imageWidth: 90,
          imageHeight: 80,
          title: "Error",
          text: "Sorry, notes you are looking for no longer exist!",
          timer: 3000
        });
      </script>

      <?php
    }
  }
?>
