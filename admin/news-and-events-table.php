<?php
session_start();
include('include/connection.php');
$check_sql="select *from news_and_event order by id";
$total=mysqli_num_rows(mysqli_query($db,$check_sql));

 $page=1;
 $limit = 15; 
$total_pages = ceil($total/$limit); 
 
if (isset($_GET["page"])) {
                             $page  = $_GET["page"]; 
                          } 
                    else{

                           $page=1;
                          }  
$start_from = ($page-1) * $limit; 

$sql="select *from news_and_event  order by id desc LIMIT $start_from, $limit ";
$result=mysqli_query($db,$sql);

$news_and_event='set';
if($page==1)
{
  $x=1;
}
else
{  
$x=(($page-1)*$limit)+1;
}




?>
<!DOCTYPE html>
<html>

<head>
    <title>News and event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="landing.css">
    <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
</head>
   <style>

    .blue{
        background-color:#000071;
        color: white; 
        
    }
    </style>

<body>
   
    <!-- top banner -->
    <?php 
        include('include/topbar.php');
   ?>
    <div class="container">
        <div class="row">
            <?php 
         include('include/sidebar.php');
     ?>
            <!-- content -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="container">
                  <?php
                    if(isset($_SESSION['success']))
                    { 

                  ?>
                  <div class="alert alert-success mt-4" role="alert">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                  </div>

                 <?php } ?>

                  <?php
                    if(isset($_SESSION['error']))
                    { 

                  ?>
                  <div class="alert alert-danger mt-4" role="alert">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                  </div>

                 <?php } ?>
                    <a  href="news_&_event.php?type=insert" class="btn btn-primary mt-3" style="background-color: #224a8f; border: none; border-radius: 20px; margin-bottom: 5px; margin-top: 5px; float: right;">ADD</a>
                            <table class="table">
                                <thead class="blue">
                                    <tr>
                                        <th>ID</th>
                                        <th>Post</th>
                                        <th>image</th>
                                        <th>Date</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <?php 
                                
                                 while($event=mysqli_fetch_array($result))
                             {

                                 ?>
                                <tr>
                                   <td><?php echo htmlentities($x); ?></td>
                                    <td><?php echo  htmlentities($event['post']);?></td>
                                     <td>
                                    <?php if($event['image']!=null && $event['image']!="") {?>
                                        <img height="80" width="80" src="news_and_announcement_file/<?php echo htmlentities($event['image']); ?>">
                                    <?php } ?>
                                    </td>
                                   
                                    <td> <?php echo htmlentities($event['date']); ?> </td>
                                  
                                    <td>
                                        <a href="news_&_event.php?type=edit&&id=<?php echo $event['id']; ?>"><i class="fa fa-edit"> </i></a>
                                        <a href="delete.php?id=<?php echo $event['id']; ?>&&type=news_and_event"><i class="fa fa-trash"> </i></a>
                                    </td>
                                </tr>

                              <?php 
                              $x++;
                            }

                              
                              ?>
                            </table>
<?php if($total>$limit) {?>
<nav aria-label="...">
  <ul class="pagination">
    <?php if($page==1) {?>
   
<?php } else{ ?>  
   <li class="page-item ">
      <a class="page-link" href="news and events_table.php?page=<?php echo $page-1; ?>" tabindex="-1">Previous</a>
    </li>
  <?php }

     for($i=0;$i<$total_pages;$i++){
  ?>

    <li class="page-item <?php if($page==$i+1) echo "active";?>"><a class="page-link" href="news and events_table.php?page=<?php echo $i+1; ?>"><?php echo $i+1; ?></a></li>
<?php } ?>

    
    
<?php if($total_pages!=$page){ ?>
    <li class="page-item">
      <a class="page-link" href="news and events_table.php?page=<?php echo $page+1; ?>">Next</a>
    </li>
  <?php } ?>

  </ul>
</nav>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="script.js"></script>
<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>