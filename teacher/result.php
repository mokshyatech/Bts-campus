<?php
session_start();
include('include/check_login.php');
$results='set';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gal.css">
</head>
<body>
</body>
<!-- top banner -->
    
    <?php include ('include/topbar.php'); ?>


<div class="container">
  <div class="row">

   <?php include('include/sidebar.php'); ?>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <form method="post" enctype="multipart/form-data" action="insert.php" >
      <div class="container uploadsection">
             <?php if(isset($_SESSION['error'])) {?>
             <div class="alert alert-danger" role="alert">
  <?php echo $_SESSION['error']; 
  unset($_SESSION['error']);
   ?>
</div><?php } ?>

 <?php if(isset($_SESSION['success'])){?>
             <div class="alert alert-success" role="alert">
  <?php echo $_SESSION['success']; 
  unset($_SESSION['success']);
   ?>
</div><?php } ?>
        <div class="col-12">
          <div class="row"   style="color: #224a8f">
          <div class="col-1">
             <i class="fa fa-user"  style="color: #224a8f" aria-hidden="true"></i>
          </div>
          <div class="col-11">Post Results</div>
          </div>
          
         

          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px; margin-bottom: 5px;">
              Choose csv file
              <input type="file" name="csv" > 
              
            </div>
          </div>
   


            
            <div class="col-4"><p style="float: right;">
            <div class="col-4"></div>
           
              
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4"><p style=" margin-left: 280px;">
            <button type="submit" name="insert_csv" class="btn btn-success" style="border: none; border-radius: 20px; margin-top: 5px; float: right;">POST</button>

            </p></div>
</form>

          </div>

        </div>
        
      </div>
    </div>
   
     <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 ">
                </div>    
        <div class="col-lg-8 col-md-8 col-sm-12 mt-3">
            <h3 >Please upload the result in format below.</h3>
              <table style="width:100%" class="text-center">
                  <tr style="border: 1px solid black; color: darkblue; background-color:lightblue">
                    <th style="border: 1px solid black;">UNIQUE CODE</th>
                     <th style="border: 1px solid black;">SUBJECT</th>
                  
                   
                    <th style="border: 1px solid black;">FULL MARKS</th>
                    <th style="border: 1px solid black;">PASS MARKS</th> 
                    <th style="border: 1px solid black;">OBTAINED MARKS</th>
                    <th style="border: 1px solid black;">FACULTY</th>
                    <th style="border: 1px solid black;">YEAR</th> 
                    <th style="border: 1px solid black;">TERM</th> 

                  </tr>
                  <tr>
                    <td style="border: 1px solid black;">SCH072GRD6RL32</td>
                  
                    <td style="border: 1px solid black;">POM</td>
                    <td style="border: 1px solid black;">100</td>
                    <td style="border: 1px solid black;">27</td>
                    <td style="border: 1px solid black;">34</td>
                    <td style="border: 1px solid black;">BBS</td>
                    <td style="border: 1px solid black;">1</td>
                    <td style="border: 1px solid black;">1</td>
                  </tr>
                    <tr>
                    <td style="border: 1px solid black;">SCH072GRD6RL32</td>
                  
                    <td style="border: 1px solid black;">ACCOUNTING</td>
                    <td style="border: 1px solid black;">100</td>
                    <td style="border: 1px solid black;">27</td>
                    <td style="border: 1px solid black;">34</td>
                    <td style="border: 1px solid black;">BBS</td>
                    <td style="border: 1px solid black;">1</td>
                    <td style="border: 1px solid black;">1</td>
                  </tr>
                </table>  
                <p><b>Note: file must be in CSV format.</b></p>
                 <p><b>And file must not contain headings <br/> ( Unique code, Subject, Fullmarks, Passmarks, Obtained Marks,Faculty,Year, Term)</b></p>
        </div>    

    </div>
  </div>

</div>




<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>