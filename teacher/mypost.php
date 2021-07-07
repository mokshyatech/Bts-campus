<?php
session_start();
include('include/check_login.php');
include('../include/connection.php');
$id=$_SESSION['teacher_id'];
$sql="select *from resources where posted_by='$id' order by id desc ";
$result=mysqli_query($db,$sql);
$mypost='set';

?>
<!DOCTYPE html>
<html>
<head>
  <title>My post</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="gal.css" />
     <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gal.css">
</head>
<body>
  <style>
     .blue{
        background-color:#000071;
        color: white; 
        
    }
    
  </style>

<!-- top banner -->
    
   <?php include 'include/topbar.php'; ?>


<div class="container">
  <div class="row">
    <?php include('include/sidebar.php'); ?>
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

                
                            <table class="table mt-5">
                                <thead class="blue">
                                    <tr>
                                        <th>SN</th>
                                        <th>PHOTO</th>
                                        <th>PDF</th>
                                        <th>Caption</th>
                                        
                                        <th>POSTED_AT</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>

                           <?php while($post=mysqli_fetch_array($result)) {?>
                                <tr>
                                   <td>php</td>
                                    <td><a href="#"><img src="photo/<?php echo $post['image']; ?>" alt="" ></a></td>
                                    <td><a href="read.php?id=<?php echo $post['id']; ?>"><i class="fas fa-file-pdf fa-3x"></i></a></td>
                                    <td><?php echo $post['caption']; ?>[<?php echo $post['subject']; ?>]<span style="text-transform: uppercase;">[<?php echo $post['faculty']; ?>]</span></td>
                                   
                          
                                    <td><?php echo $post['created_at']; ?></td>
                                  
                                    <td>
                                       
                                        <a href="include/delete.php?id=<?php echo $post['id']; ?>&&type=resources"><i class="fa fa-trash fa-lg"> </i></a>
                                    </td>
                                </tr>
                              <?php } ?>

                            
                            </table>

                        </div>
                    </div>
    
</div>
</div>
</body>

<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>