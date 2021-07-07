<?php
  include("include/connection.php");
  include "include/extra.php";
session_start();
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>view more</title>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="frontpage/css/style.css" />
     <link rel="shortcut icon" href="frontpage/images/logo1.jpg" />
  </head>
  <body>
    <!-- top banner -->
    <?php include"include/banner.php";?>

    <!-- navbar -->
  <?php include('include/navbar.php'); ?>

    
<div class="container-fluid">
      <div class="row" style="justify-content: center;color: white; background-color: #1a237e;"><h5>News and Announcement</h5></div>
      <?php 

  $x=1;
                        
               
                        $limit = 6;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  }; 
  if($page==1)
  {
    $x=1;
  } 
  else
  {
    $x=(($page-1)*$limit)+1;
  } 


  
$start_from = ($page-1) * $limit; 
                       
                         
                                              
                      $sql="select *from news_and_event  ORDER BY id DESC LIMIT $start_from, $limit ";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>

      <div class="row viewmore bg-light">
        <div class="col-lg-2 col-md-2 col-sm-12 ">
          <div class="circle" style="transform: translateX(-8px);">
            
            <div class="day ml-3"><span style="font-size:20px;margin-right: 10px; font-weight: bold; "><?php echo $x."."; ?></span><?php echo  date('j F, Y', strtotime($row['date']));  ?></div>
          </div>
        </div>
        <div class="col-lg-10 col-md-2 col-sm-12 pt-3">    <a href="detailViewOfNewsAnnouncementAndNotice.php?id=<?php echo $row['id']; ?>"><?php echo ($row['post']); ?></a></div>
      </div>
      <?php $x++; } ?>
    </div>
     


    <!--body part -->
   <nav aria-label="Page navigation example" style="background-color: #d5d8de; margin-top: 10px;" >
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='news.php?page=".($page-1)."'>  Prev </a>";   
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
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='readmore_news.php?page=".$i."' >".$i."</a></li>"; 
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
            echo "<a class='page-link' href='readmore_news.php?page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>

<script>   
   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'readmore_news.php?page='+page;   
    }   
  </script>
    <!-- footer -->
 
     <?php include('include/footer.php'); ?>

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
  </body>
</html>