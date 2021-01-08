<?php
 include("include/connection.php");
 session_start();
 $gallery='set';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title> Gallery</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="frontpage/css/style.css" />

  
</head>
<body>
  
   <!-- top banner -->
    <?php include "include/banner.php";?>
    <!-- navbar -->
    <?php include('include/navbar.php'); ?>

    <!-- photos of galary -->
  <!-- photos of galary -->
  <div class="container-fluid">
<div class="row" style="background-color: green; height: 40px; color: white;justify-content: center;">
            <h4> PHOTO GALLARY </h4>
          </div> 
     
    <div class="container" style="margin-top: 50px;">

      <div class="row " style="justify-content: center;">
        <?php 


                       
            
    $limit = 6;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;               
                                              
                    $sql="select * from photos WHERE school=1 ORDER BY id DESC LIMIT $start_from, $limit"; 
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" >
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>">
   <img src="../admin/photo/<?php echo $row['photo']; ?>" class="img-fluid" style="height: 250px; width: 350px;">
</button>

<!-- Modal -->


<div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../admin/photo/<?php echo $row['photo']; ?>" class="img-fluid" style="height: 350px; width: 450px;">
      </div>
      
    </div>
  </div>
</div>
          
          

        </div>
        <?php
      }
        ?></div>

       

</div>
    </div><br>
     
   

 <nav aria-label="Page navigation example" style="background-color: #d5d8de; margin-top: 10px;" >
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='gallery.php?page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?> 
      </li>
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM college_resource"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='gallery.php?page=".$i."' >".$i."</a></li>"; 
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
            echo "<a class='page-link' href='gallery.php?page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>

    <!-- footer -->
   <?php include('include/footer.php'); ?>

<script src="script.js">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'photos.php?page='+page;   
    }   
  </script>


<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
