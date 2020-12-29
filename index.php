<?php
include"include/connection.php";
$index='set';
session_start();
  if(isset($_SESSION['login_from_school']))
  {
      header('location:../index.php');
  }
  if(isset($_SESSION['login_from_engineering']))
  {
    header('location:../engineering/index.php');

  }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BTS</title>

    <!-- css  -->
    <?php include('include/style.php'); ?>
  </head>
  <body>
    <!-- top banner -->
    
    <?php include('include/banner.php'); ?>
    <!-- navbar -->
    <?php include('include/navbar.php'); ?>

    <!-- home image -->
    <div class="row p-0">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div>
          <img src="frontpage/images/banner-img.jpg" class="img-fluid" alt="Not Available!" />
        </div>
      </div>
    </div>

    <!-- announcement section -->
    <div class="container-fluid">
      <div class="row announcement pt-5">
        <div class="col-lg-4 ">
          <ul class="nav flex-column" style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NEWS AND ANNOUNCEMENT</a>
            </li>
             <?php 

                        
                   
                       
                         
                                              
                      $sql="select *from news_and_event WHERE plus2=1 ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>



            <li class="nav-item">
              <a class="nav-link" href="#"
                ><i class="fa fa-circle"></i><?php echo $row['post']; ?></a
              >
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="View/news.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="nav flex-column"  style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NOTICE BOARD</a>
            </li>
            <?php                  
                      $sql="select *from notice WHERE plus2=1 ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>

            <li class="nav-item">
              <a class="nav-link" href="#"
                ><i class="fa fa-circle"></i></i><?php echo $row['notice']; ?></a
              >
            </li>
           <?php } ?>

            <li class="nav-item">
              <a class="nav-link" href="View/notice.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">CALENDAR EVENTS</a>
            </li>
            <?php                  
                      $sql="select *from calender WHERE plus2=1 ORDER BY id DESC LIMIT 2";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>


            <li class="nav-item">
              <a class="nav-link" href="#"><p class="date-marker" style="width:90%; height: 60px; margin-top: 7px;"><?php echo $row['date']; ?><br /><?php echo $row['event']; ?></p>
              </a>
            </li>
          <?php } ?>

            <li class="nav-item">
              <a class="nav-link" href="View/cal.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
           
          </ul>
        </div>
      </div>
    </div>

    <!-- about us banner -->
    <div class="row p-0">
      <div class="col-lg-12">
        <div class="about-img">
          <img src="frontpage/images/banner-img.jpg" alt="Not Available!" />
          <div class="title">
            <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link right-link" href="./description/description.php"><h1>ABOUT US</h1></a>
              </li>
            </ul>
          </form>
          </div>
        </div>
      </div>
    </div>

    <!-- message section -->
    <div class="container-fluid">
      <div class="row message p-5">
        <div class="col-lg-6 col-sm-12 col-md-6" >
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>INTRODUCTION</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam cumque eligendi eum asperiores voluptas magnam. Pariatur,
              recusandae! Lorem ipsum dolor sit amet consectetur, adipisicing
              elit. Asperiores nobis magni cupiditate unde aliquid modi quas
              aperiam quod eligendi, beatae tempore corporis laborum
              exercitationem nesciunt repellendus ipsam. Cupiditate incidunt, ad
              alias quaerat labore asperiores hic nobis quidem excepturi
              assumenda saepe itaque consequuntur vel quibusdam? Fugiat expedita
              beatae sapiente atque sint.<br />
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni
              tenetur enim, nobis natus sunt vitae culpa, quae earum obcaecati
              magnam perferendis veniam fuga molestias maiores.
            </p>
            <button type="button" class="btn btn-success">View More</button>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6">
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>MESSAGE FROM THE CHIEF</h4>
            <div class="chief-img">
              <img src="frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
            <button type="button" class="btn btn-success">View More</button>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
   <?php include('include/footer.php'); ?>

    <!-- js setup -->
    <?php include('include/script.php'); ?>
   
     <input type="hidden" id="admission_success_engineering" value="<?php if(isset($_SESSION['admission_success_engineering'])) {echo htmlentities($_SESSION['admission_success_engineering']); } unset($_SESSION['admission_success_engineering']); ?>">

    <input type="hidden" id="admission_error_engineering" value="<?php if(isset($_SESSION['admission_error_engineering'])) {echo htmlentities($_SESSION['admission_error_engineering']); } unset($_SESSION['admission_error_engineering']); ?>">
    <script>

      var checksuccess =$('#admission_success_engineering').val();

      if(checksuccess!=='')
      {
      Swal.fire({
       title: 'success!',
      text: 'Your form has been submitte successfully',
      icon: 'success',
      confirmButtonText: 'OK'
     })
    }

    var checkerror=$('#admission_error_engineering').val();
    if(checkerror!=='')
    {
      Swal.fire({
       title: 'error!',
      text: 'Opps Your form has not been submitted ',
      icon: 'error',
      confirmButtonText: 'OK'
     })

    }
    </script>
  </body>
</html>
