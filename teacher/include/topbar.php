<?php include"middleware.php"; ?>
<div class="container-fluid">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4 col-4">
              <div class="logo">
                <img src="../frontpage/images/logo.png"  loading="lazy" style="margin-top: 20px;" alt="Not Available!" />
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                <br/>
              <div class="top-title">
                <h4>BUDHANILKANTHA SECONDARY SCHOOL</h4>
              </div>
              <div class="top-subtitle">
                <h5><i>A Better Learning Future Starts</i></h5>
              </div>
            </div>
          </div>
        </div>
                        <div class="col-lg-2 col-md-2 col-12">

                        

                           <div class="row" style="margin-top: 60px; margin-right: 2px;">
                            <?php if(!isset($profile)) {?>
                          
                            <div class="col-6"><h5><i style="margin-right: 5px; margin-top: 10px;" class="fa fa-user" aria-hidden="true"></i><a href="profile.php" style="text-decoration: none; color: black;"><?php echo $_SESSION['teacher']; ?></a></h5></div>
                          <?php }else{ ?>

                            <div class="col-3">
                              <a href="index.php"> <button type="submit" class="btn btn-primary" style="background-color: #224a8f; border: none; margin-right: 4px; float:right;">HOME</button></a>
                            </div>
                          <?php } ?>
                            <div class="col-3">
                              <a href="../login/teacher_logout.php"> <button type="submit" class="btn btn-primary" style="background-color: #224a8f; border: none; float: left; border-radius: 20px;">LOGOUT</button></a>
                            </div>
                          </div>
                           
                        </div>
      </div>
    </div>