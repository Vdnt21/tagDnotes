<style>

    ul{
        font-family: 'Kanit', sans-serif;
    }
    
    .logoutbtn{
        border: none;
        background: transparent;
        color: #aaa;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
    }
</style>


  <header role="banner"> 
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
         <a href="index.php"><label class="logo"><img src="1.png" width="270" height="90" ALT="TagD'Notes" ALIGN=CENTER></label> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation"></a>
            <span class="navbar-toggler-icon"></span>
          </button>

           <div class="collapse navbar-collapse navbar-light " id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link " href="index.php"><i class="fas fa-home"></i> HOME</a>
              </li>

              <?php
              if (isset($_SESSION['userId'])){
                echo '<li class="nav-item">
                        <a class="nav-link " href="notes.php" name="notes"><i class="fas fa-book-open"></i> NOTES</a>
                      </li>';
              }
              ?>
              
              <li class="nav-item">
                <a class="nav-link" href="about.php"><i class="fas fa-file-alt"></i> ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> CONTACT</a>
              </li>
            </ul>

            <?php
              if (isset($_SESSION['userId'])){
                echo '<form action="includes/logout.inc.php" class="navbar-nav absolute-right" method="post">         
                        <i class="fas fa-sign-out"><button class="logoutbtn" name="logout-submit"> LOGOUT</button></i>
                      </form>';
              }

              else {
                echo '<ul class="navbar-nav absolute-right">
                        <li class="nav-item">
                          <a href="signup.php" class="nav-link"><i class="fas fa-user-plus"></i> LOGIN</a>
                        </li>
                      </ul>';
              }
            ?>
            
           <!---->
          </div>
        </div>
      </nav>
    </header>
  