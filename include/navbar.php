

 
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
              <a class="nav-link <?php if(isset($index)) echo 'active'; ?> " href="index.php">HOME </a>
            </li>
           
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($gallery)){ echo 'active'; } ?> " href="gallery.php">GALLERY</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($event)){echo'active';  } ?>" href="event.php">EVENTS</a>
            </li>
            <?php if(isset($_SESSION['login_as_student'])){ ?>
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($resource)){echo 'active'; } ?>" href="resources.php">RESOURCES</a>
            </li>
          <?php } ?>
           
            <?php if(isset($_SESSION['login_as_student'])) {  if($_SESSION['payment']=='yes') {?>
             <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($result)){echo'active'; } ?> " href="result.php">RESULTS</a>
            </li>
          <?php }} ?>
               <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($ourteam)){echo'active'; } ?>" href="ourteam.php">OUR TEAM</a>
            </li>          
                  <?php
        if(!isset($_SESSION['login_as_student'])){
         ?>
               <li class="nav-item center-menu <?php if(isset($admission)){ echo 'active'; } ?> ">
              <a class="nav-link" href="admission.php">ADMISSION FORM</a>
            </li>
       <?php } ?>
            <li class="nav-item center-menu">
              <a class="nav-link <?php if(isset($contactus)){echo 'active'; } ?>" href="contactus.php">CONTACT US</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
               <?php
        if(isset($_SESSION['login_as_student'])){
         ?>
              <li class="nav-item">
                <a class="nav-link right-link <?php if(isset($profile)){echo("active");} ?>" href="profile.php"><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="login/student_logout.php">LOGOUT</a>
              </li>
              <?php }else{
           ?>

              <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >LOGIN</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login/login.php?user=student">STUDENT</a>
                <a class="dropdown-item" href="login/login.php?user=teacher">TEACHER</a>
                
              </div>
              </li>
               <?php
}?>
            
            </ul>
          </form>
        </div>
      </nav>
    </div>



