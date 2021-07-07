<?php
 include("include/connection.php");
 session_start();
 if(!isset($_SESSION['login_as_student']))
{
   header('location:index.php');
}
 $resource='set';
 $page=1;
 if(isset($_GET['subject']))
 {
  $subject=$_GET['subject'];
 }
 if(isset($_GET['faculty']))
 {
  $faculty=$_GET['faculty'];
 }
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Resources</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="shortcut icon" href="frontpage/images/logo1.jpg" />
  <link rel="stylesheet" type="text/css" href="resource.css">
  <link rel="stylesheet" href="frontpage/css/style.css" />

</head>
<body>
  

<!-- top banner -->
    <?php include "include/banner.php";?>

    <!-- navbar -->
   <?php include('include/navbar.php'); ?>
   <!-- message section -->
<div class="container-fluid">
<div class="row" style="background-color: green; height: 40px; color: white;justify-content: center; margin-bottom: 10px;">
 <h4>Campus Resources</h4>
</div>
          

<!--class -->
<div class = "class" style="text-align: center;">
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   BBS
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="resources.php?faculty=bbs&&subject=C.English">C.English</a>
    <a class="dropdown-item" href="resources.php?faculty=bbs&&subject=POM">POM</a>
    <a class="dropdown-item" href="resources.php?faculty=bbs&&subject=Accountancy">Accountancy</a>
    <a class="dropdown-item" href="resources.php?faculty=bbs&&subject=Business_statisics">Business statisics</a>
    <a class="dropdown-item" href="resources.php?faculty=bbs&&subject=Economics">Economics</a>

    
  </div>
</div>
<!--class 2-->
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   B.ED
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="resources.php?faculty=bed&&subject=C.English">C.English</a>
    <a class="dropdown-item" href="resources.php?faculty=bed&&subject=C.Nepali">C.Nepali</a>
    <a class="dropdown-item" href="resources.php?faculty=bed&&subject=Found_of_edu">Found of Edu</a>
    <a class="dropdown-item" href="resources.php?faculty=bed&&subject=Maj_English">Maj.English</a>
    <a class="dropdown-item" href="resources.php?faculty=bed&&subject=Maj_Health_Phy">Maj.Health & Phy.Edu</a>
    <a class="dropdown-item" href="resources.php?faculty=bed&&subject=Maj_Nepali">Maj.Nepali</a>
    
  </div>
</div>
<!--class 3-->
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   B.A
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="resources.php?faculty=ba&&subject=C.English">C.English</a>
    <a class="dropdown-item" href="resources.php?faculty=ba&&subject=C.Nepali">C.Nepali</a>
    <a class="dropdown-item" href="resources.php?faculty=ba&&subject=Maj_Scociology">Maj.Sociology</a>
    <a class="dropdown-item" href="resources.php?faculty=ba&&subject=Maj_English">Maj.English</a>
    
    
  </div>
</div>

</div>

<!-- ------------------------------------------------------------------------------------------------------------------------
                                this part is displayed first
------------------------------------------------------------------------------------------------------------------------ -->
 
  <?php if( !isset($subject) && !isset($faculty) ){ ?>     
<h5 style="text-align: center; margin-top: 10px; color: green;">NOTE'S PHOTOS</h5>
            <div class="row row-image" style="margin-top: 50px; background-color: #fae19d; justify-content: center; ">
<?php 
    $limit = 3;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;  

                                 
                      $sql="select *from resources ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style="justify-content: center;" >
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>">

          <img src="teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;"></button>
          <p style="text-align: center; font-weight: bold; text-transform: uppercase;"><?php echo "Faculty: "; echo $row['faculty']; ?></p>
          <p style="text-align: center;"> <?php echo $row['subject'];?></p>
          
          </div>

          <!-- model  -->
          <div class="modal fade-modal-lg" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 800px; width: 800px;">
      </div>
      
    </div>
  </div>
</div>
          <?php
          }?>
          </div>   
                       
                      
   

        

 <nav aria-label="Page navigation example" style="background-color: #d5d8de;">
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='resources.php?page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?>
        </li> 
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM resources"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='resources.php?page=".$i."'>".$i."</a></li>"; 
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
            echo "<a class='page-link' href='resources.php?page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>
 </div> 

    <?php } ?>

    <!----------------------------------------------------------------------------------------------------------------------
                                when we choose subject
------------------------------------------------------------------------------------------------------------------------ -->
 <?php if(isset($subject)) {?>

  <div class="row" style="background-color: #FAE19D; height: 50px; color: black;justify-content: center; margin-top: 20px;">
 <h1><span style="text-transform: uppercase;"><?php echo $faculty." "; echo $subject; ?></span> RESOURCES</h1>
</div>
       <div class="row" style="background-color: #fae19d; padding: 20px; margin-top: 10px; ">                      
                      
         
          <?php          
                    $limit = 3;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;       
            
                      $sql="select *from resources where faculty='$faculty' and subject = '$subject' and pdf IS NOT NULL AND pdf <> '' LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>
                    
           <div class="col-lg-3 col-md-3 col-sm-3">
            
              
              <div class="text-center">
                <?php echo $row['pdf'];?><br>
                <button type="button" class="btn btn-success btnview" >
                  <?php $url="include/read.php?id=".$row['id']."&&faculty=".$faculty."&&subject=".$subject."&&page=".$page; ?>
  <a href="<?php echo $url; ?>" style="color: black;">read</a></button>
</div>
              </div>
              <?php
            }
              ?>

           </div>
        
       
              
<div class="row"  style=" justify-content: center; margin-top: 20px;">
 <h4>NOTES PHOTOS</h4>
</div>
<div class="row row-image" style="margin-top: 50px; background-color: #fae19d; ">
                    
<?php 


                                 
                       $sql="select *from resources where faculty='$faculty' and subject = '$subject' and image IS NOT NULL AND image <> ''LIMIT $start_from, $limit";            
                     
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
                          if(file_exists('teacher/photo/'.$row['image'])){
                        ?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style=" margin-left: px;" >
              <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>">
          <img src="teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 350px; width: 350px;">
          </button>
          <p style="text-align: center;"> <?php echo $row['subject'];?></p>
          
          </div>
                    <div class="modal fade-modal-lg" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 800px; width: 800px;">
      </div>
      
    </div>
  </div>
</div>
          <?php
                 }
          }?>
          </div>  

<!-- pagination-->

 <nav aria-label="Page navigation example" style="background-color: #d5d8de;">
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='resources.php?faculty=".$faculty."&&subject=".$subject."&&page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?>
        </li> 
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM resources where subject='$subject' "); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='resources.php?faculty=".$faculty."&&subject=".$subject."&&page=".$i."'>".$i."</a></li>"; 
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
            echo "<a class='page-link' href='resources.php?faculty=".$faculty."&&subject=".$subject."&&page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>
<?php } ?>

    <!-- footer -->
    <?php include"include/footer.php";?>








<script src="script.js">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<style>
.button {
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 8px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>

<style type="text/css">
  .dropdown-menu .dropdown-item{
    background-color: white;
  }
</style>



<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>