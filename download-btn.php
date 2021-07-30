<?php
  require 'header.php';
  include 'notes/dbh.php';
?>

<body>
   
  <!--navbar-->
  <?php
  if (isset($_POST['submit-btn'])) {
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $subject = $_POST['subject'];

        if (empty($subject) || $course === "COURSE" || $semester === "SEMESTER") {
                
                header("Location: notes.php?error=emptyinput");
                exit();

        } else {
            $sql = "SELECT * FROM notesupload where course = '$course' AND semester = '$semester' AND subject = '$subject';";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);
            if ($queryResults == 0) {
                header("Location: notes.php?error=nonotes");
                exit();
        } else {
            require 'navbar.php';
  ?>
     
  <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(notes1.jpg);">
    <div class="container">
      <div class="row align-items-center site-hero-inner justify-content-center">
        <div class="col-md-8 text-center">
          <div class="mb-5 element-animate">
            <h1>Download The Notes <i class="fas fa-file-download"></i></h1>
            <p class="lead">It's very simple just select your course,semester and subject and Submit it to get your notes.</p>
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

    <div class="table-responsive-sm">
            <table class="table table-sm table-bordered table-hover">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>FILENAME</th>
                     <th>COURSE</th>
                     <th>SUBJECT</th>
                     <th>ACTION</th>
                  </tr>
             </thead> 
        <?php      
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['course'] ?></td>
                    <td><?php echo $row['subject'] ?></td>
                    <td><a href='notes\download.php?file_notes=<?php echo $row['notes'] ?>'>Download</a></td>
                </tr>
                </br>
            <?php
        }
        ?>
            </table>
    </div>
    </section>


<!--footer-->
  <?php
    require 'footer.php';
  }
  }
  }
  ?>



    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>