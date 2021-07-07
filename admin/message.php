
<?php
session_start();
$message="set";
include('include/connection.php');

$sql = 'SELECT * FROM user_message';
$statement = $conn->query($sql);

 

?>
<!DOCTYPE html>
<html>

<head>
    <title>User message</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
    <link rel="stylesheet" type="text/css" href="landing.css">
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
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mt-5">
              <?php
                    if(isset($_SESSION['success']))
                    { 

                  ?>
                    <div class="alert alert-success mt-2" role="alert">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                    <?php } ?>
                    <?php
                    if(isset($_SESSION['error']))
                    { 

                  ?>
                    <div class="alert alert-danger mt-2" role="alert">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                    <?php } ?>
                    

      <div class="card-body" style=" background-color: #FFFFFF;">
      <table class="table table-bordered ">
        <tr>
         <th>ID</th>
          <th>Name</th>
           <th>Phone</th>
          <th>Email</th>
          <th>message</th>
          <th></th>
        </tr>
        <?php $i=1; while($row = $statement->fetch_assoc()) {  ?>
        
          <tr>
            <td><?php echo $i; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['phone']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['message']; ?></td>
            
              
            <td>  <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?type=userMessage&&id=<?php echo $row['id']; ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php $i++;} ?>
      </table>
    </div>
             </div>
                </div>
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