<?php include"middleware.php"; ?>
<div class="container-fluid">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4 col-4 mt-">
              <div class="logo">
                <img src="frontpage/images/logo.png" style="margin-top: 20px;" alt="Not Available!" />
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8 ">
              <div class="top-title">
                <h4>BUDHANILKANTHA CAMPUS</h4>
              </div>

              <div class="top-subtitle">
                <h5>A BETTER LEARNING FUTURE STARTS</h5>
              </div>
            </div>
          </div>
        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                          <div class="row" style="margin-top: 60px; margin-right: 2px;">
                            <div class="col-6"><h5><i style="margin-right: 5px; margin-top: 10px;" class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['username']; ?></h5></div>
                            <div class="col-6">
                              <a href="logout.php"> <button type="submit" class="btn btn-primary" style="background-color: #224a8f; border: none; float: left; border-radius: 20px;">LOGOUT</button></a>
                            </div>
                          </div>
                           
                        </div>
      </div>
    </div>