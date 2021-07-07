<?php
include "include/connection.php";
$event='set';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Event</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="frontpage/css/style.css" />
  <link rel="shortcut icon" href="frontpage/images/logo1.jpg" />

</head>
<body style="background-color: #d5d8de;">
  

<!-- top banner -->
    <?php include "include/banner.php";?>

    <!-- navbar -->
   <?php include('include/navbar.php') ?>

<div class="container-fluid">
<div class="row" style="background-color: green; height: 40px; color: white;justify-content: center;">
            <h4>CAMPUS EVENTS </h4>
          </div> 
          </div>  
           <div class="container-fluid" style="background-color: #d5d8de;">         
<?php 
    $limit = 3;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;  

                                 
                      $sql="select *from news_and_event ORDER BY id DESC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        <div class="row row-image" style="margin-top: 50px; background-color: #fae19d; justify-content: center; ">
           <div class="col-lg-2 col-sm-12 col-md-2 ml-5 mb-2 datecol">
              <div class="date">
                <h5><?php echo $row['date']; ?></h5>
              </div>
            </div>
    <div class="col-lg-6 col-sm-12 col-md-6 ml-5 mb-2 descriptioncol">
            <h3><?php echo $row['post'];?></h3>
             <p><?php echo $row['description'];?> </p>
             
             </div>

    <div class="col-lg-4 col-sm-12 col-md-4" style="text-align: center;">
      
    </div>
        </div>
          <?php
          }?>
            
        </div>         
   

 <nav aria-label="Page navigation example" style="background-color: #d5d8de; margin-top: 5px;" >
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='event.php?page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?> 
      </li>
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM news_and_event"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='event.php?page=".$i."' >".$i."</a></li>"; 
}
echo $pagLink . "</ul>";  
?>
</li>
 <li class="page-item">
<?php 
  if($page<$total_pages){
        ?>
        <li class='page-item'>
        <?php   
            echo "<a class='page-link' href='event.php?page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>

  
    <!-- footer -->
  <?php include('include/footer.php'); ?>


<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>