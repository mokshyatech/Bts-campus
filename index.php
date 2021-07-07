
<!DOCTYPE html><?php
include "include/connection.php";
include "include/extra.php";
$index='set';

session_start();
 
 
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BUDHANILKANTHA CAMPUS</title>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="frontpage/css/style.css" />
      <link rel="shortcut icon" href="frontpage/images/logo1.jpg" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
  <style>
  
 
          ul li {
    word-break: break-all;
}


@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}

.blink{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration: 0.6s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
  color:white;
} 
.model-text{
   font-style: italic;
}

  </style>
  <body>
    <!-- top banner -->
   <?php include('include/banner.php'); ?>

    <!-- navbar -->
    <?php include('include/navbar.php'); ?>
<!-- carousel -->

<div id="carouselExampleControls" class="carousel slide" style="height:20%;overflow:hidden" data-ride="carousel" data-interval="2000">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="frontpage/photos/campus2.jpg"   alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="frontpage/photos/campus3.jpg"   alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="frontpage/photos/campus4.jpg"   alt="Third slide">
    </div>

     <div class="carousel-item">
      <img class="d-block w-100" src="frontpage/photos/campus5.jpg"   alt="Third slide">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
   

    <!-- announcement section -->
    <div class="container-fluid">
      <div class="row announcement pt-3">
        <div class="col-lg-4 ">
          <ul class="nav flex-column" style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NEWS AND ANNOUNCEMENT</a>
            </li>
            <?php 
 
                      $sql="select *from news_and_event  ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>

            <li class="nav-item">
                     <div class="container">
                <div class="row">
                  <div class="col-md-1">
                     <i class="fa fa-circle"></i>
                  </div>
                  <div class="col-md-11">
                        <a href="detailViewOfNewsAnnouncementAndNotice.php?id=<?php echo $row['id']; ?>">
                        <?php echo link_clickable($row['post']); ?>
                        (<?php echo link_clickable($row['created_at']); ?>)
                      </a>
                     </div>
               
                </div>
             
             </div>
            </li>
            <?php }?>
            <li class="nav-item"  style="text-align: center;">
              <a class="nav-link" href="readmore_news.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
            
        </div>
       




        <div class="col-lg-4">
          <ul class="nav flex-column"  style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NOTICE BOARD</a>
            </li>
                  <?php                  
                      $sql="select *from notice  ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>
            <li class="nav-item">
                   <div class="container">
                <div class="row">
                  <div class="col-md-1">
                     <i class="fa fa-circle"></i>
                  </div>
                  <div class="col-md-11">
                          <a href="detailViewOfNewsAnnouncementAndNotice.php?type=notice&&id=<?php echo $row['id']; ?>">
                        <?php echo link_clickable($row['title']); ?>
                        (<?php echo link_clickable($row['created_at']); ?>)
                      </a>

                     </div>
               
                </div>
             
             </div>
            </li>
               <?php }?>
            <li class="nav-item"  style="text-align: center;">
              <a class="nav-link" href="readmore_notice.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4  mb-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">CALENDAR EVENTS</a>
            </li>
            <?php                  
                      $sql="select *from calender   ORDER BY id DESC LIMIT 2";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>
            <li class="nav-item">
              <a class="nav-link" href="#"
                ><p class="date-marker" style="width:100%; height: 60px; margin-top: 7px; margin-right: 0px;"><?php echo $row['date']; ?><br /><?php echo short_text($row['event'],50);?></p>
              </a>
            </li>
            <?php } ?>
             <li class="nav-item"  style="text-align: center;">
              <a class="nav-link" href="readmore_calender.php">
                <button type="button" class="btn btn-success">
                  View More
                </button></a>
              
            </li>

          </ul>
        </div>
      </div>
    </div>

    <!-- about us banner -->
    <div class="container-fluid">
       <div class="row p-0">
      <div class="col-lg-12">
        <div class="about-img">
          <img src="frontpage/photos/campus6.jpg"  height="400" width="100" alt="Not Available!" />
        </div>
          <div class="title">
            <form class="form-inline about my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link right-link" href="aboutus.php"><h4 style="">ABOUT US</h4></a>
              </li>
            </ul>
          </form>
          </div>
        </div>
      </div>
    </div>
    </div>
   

    <!-- message section -->
    <div class="container-fluid">
      <div class="row message p-2">
        <div class="col-lg-6 col-sm-12 col-md-6 p-sm-0 p-lg-3 p-md-3 p-1" >
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>INTRODUCTION</h4>
             <p>
              Located at the Lap of Shivapuri National Park, Budhanilkantha Campus is a promising institution run by an enthusiastic group of academicians with the cherished goal of producing quality technical manpower in the country. We are committed to instill knowledge, skills, responsibility, discipline and commitment, the five pillars of success. We have developed a unique educational programme blending futuristic needs with developmental skills that are essential for students in personal as well as professional life. We are dedicated to a continuing tradition of excellence in an ever-changing world. Within a safe and supportive environment, we provide a relevant, high-quality education and prepare our diverse student body for future endeavors. We honor achievement and promote pride in ourselves, in our institution, and in our community.<br>
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 p-sm-0 p-lg-3 p-md-2 p-1">
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>MESSAGE FROM THE CHIEF</h4>
            <div class="chief-img">
              <img src="frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
             It is with great pleasure that I welcome you to our campus website. <br/>
             <br/>
 <p style="  text-align: justify;">
    Budhanilkantha Campus is a great place to teach and learn! Our teachers are committed to a high quality learning experience focused on the individual needs of each child. We are striving to be creative and innovative in our instruction to engage students in their learning through a variety of activities, applications of technology, and 21st Century skills.<br/>
    Our community has a long standing tradition of excellence in academics, sports, and the arts. We are committed to our mission of preparing students to be productive citizens and life-long learners in an ever changing world.<br/>
We believe that there are numerous opportunities, both within our curricula and through extracurricular activities, for our students to gain the skills that will allow them to be successful in their lives after graduation.<br/>
<br/>
I hope you enjoy your visit to the website.<br/>

            </p>
          </div>
        </div>
      </div>
    </div>


       <!-- Large modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center class="text-center">News And Announcement <span class="blink btn btn-danger btn-sm ">new </span></center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          
               <div class="form-group">
           
            <div class="container row">
              <?php 
               $sql="select *from news_and_event ORDER BY id DESC LIMIT 1";
                      $query=mysqli_query($db,$sql);
                       $result=mysqli_fetch_assoc($query);
                       if(!empty($result)){ 

               ?>
              <div class="col-md-4">
                <span >(<?php echo $result['date']; ?>)</span>
              </div>

              
               <div class="col-md-8">
                   
                       <a href="detailViewOfNewsAnnouncementAndNotice.php?id=<?php echo $result['id']; ?>">
                        <p class="model-text"><?php echo $result['post']; ?>  
                         </p>
                        </a>
              </div>
            <?php }  else {echo "No news";}  ?>
            </div>
           <hr>
           </div>
    
          

         
         
        
      </div>
    
    </div>
  </div>
</div>

    <!-- footer -->
     <?php include('include/footer.php'); ?>
 
    <input type="hidden" id="admission_success" value="<?php if(isset($_SESSION['admission_success'])) {echo htmlentities($_SESSION['admission_success']); } unset($_SESSION['admission_success']); ?>">

    <!-- js setup -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
     <script>

      var checksuccess =$('#admission_success').val();

      if(checksuccess!=='')
      {
      Swal.fire({
       title: 'success!',
      text: 'Your form has been submitted successfully',
      icon: 'success',
      confirmButtonText: 'OK'
     })
    }

$( document ).ready(function() {
   $('#exampleModal').modal('show')
});
  
    </script>
  </body>
</html>
