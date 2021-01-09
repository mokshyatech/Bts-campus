<?php
session_start();
include('include/connection.php');

$sql="select *from admission order by id desc ";
$admission=[];
$result=mysqli_query($db,$sql);
$admission='set';
?>
<!DOCTYPE html>
<html>

<head>
    <title>BTS admision table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="landing.css">
</head>
   <style>

    .blue{
        background-color:#000071;
        color: white; 
    }
    .head{
    color:#1a237e;
    font-weight: bold;
    margin-bottom: 5px;
    padding-bottom: 5px;
    font-size:30px;
    margin-top: 50px;
   }
   .span{
    border-left: 5px solid #1a237e;
    border-top: 5px solid #1a237e;
    border-radius: 6px;
    box-shadow: 10px 10px 0.6px;
   }
    </style>

<body>
    <?php 

include('include/check_login.php');

?>
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
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="container">
                    <div class="head">
                        <p><span class="span">College Student Form</span></p>
                    </div>
                   
                            <table class="table">
                                <thead class="blue">
                                    <tr>
                                        <TH>ID</TH>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phoneno</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <?php 
                                 $x=1;
                                 while($admission=mysqli_fetch_array($result))
                             {

                                 ?>
                                <tr>
                                   <td><?php echo htmlentities($x); ?></td>
                                    <td><?php echo  htmlentities($admission['firstname']); echo  htmlentities($admission['lastname']); ?> </td>
                                   
                                    <td> <?php echo htmlentities($admission['municipality'])."-"; echo htmlentities($admission['wardno'])."-";echo htmlentities($admission['district']); ?></td>
                                   
                                    <td><?php echo htmlentities($admission['email']); ?> </td>
                                   
                                    <td><?php echo htmlentities($admission['mobilenumber']); ?></td>
                                    <td>
                                        <a href="admision_form.php?id=<?php echo $admission['id']; ?>&&faculty=management" class="btn btn-danger">View</a>
                                    </td>
                                </tr>

                              <?php 
                              $x++;
                            }

                              
                              ?>
                            </table>
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