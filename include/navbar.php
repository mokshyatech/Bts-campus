 
    <div>
      <nav class="navbar navbar-expand-lg navbar-light py-0 ">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
           
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($index)) echo 'active'; ?> " href="index.php">Collage </a>
            </li>
           
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($gallery)){ echo 'active'; } ?> " href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($event)){echo'active';  } ?>" href="event.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="resources/resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($ourteam)){echo'active'; } ?>" href="ourteam.php">Our Team</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="results/results.php">Results</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($contactus)){echo 'active'; } ?>" href="contactus.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
               <?php
        if(isset($_SESSION['login_user'])){
         ?>
              <li class="nav-item">
                <a class="nav-link right-link" href="school/student/detail/profile.php"><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="login/logout.php">Logout</a>
              </li>
              <?php }else{
           ?>

              <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >Login</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login/login.php">Student</a>
                <a class="dropdown-item" href="login/teacherlogin.php">Teacher</a>
                
              </div>
              </li>
               <?php
}?>
            
            </ul>
          </form>
        </div>
      </nav>
    </div>

