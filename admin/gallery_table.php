<?php
session_start();
include('include/connection.php');

$sql="select *from photos order by id DESC";
$result=mysqli_query($db,$sql);
$gallery='set';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Engineering Student Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="landing.css">
</head>
<style>
    .blue {
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
   .rounded{

    height: 50px;
    width: 60px;
    border-radius: 50%;
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
                    <p ><spam class="span">Gallery Images</spam></p>  
                  </div>
                  
                    <?php
                    if(isset($_SESSION['success']))
                    { 

                  ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                    <?php } ?>
                    <?php
                    if(isset($_SESSION['error']))
                    { 

                  ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                    <?php } ?>
                   
                    <p>
                        <a href="gallery1.php" class="btn btn-primary" style="background-color: #224a8f; border: none; border-radius: 20px; margin-bottom: 5px;  float:right; ">Add</a>
                    </p>
                            <table class="table">
                                <thead class="blue ">
                                    <tr>
                                        <TH>SN</TH>
                                        <th>IMAGE</th>
                                        <th>+2</th>
                                        <th>school</th>
                                        <th>engineering</th>
                                        <th>ACTION</th>
                                       
                                    </tr>
                                </thead >
                                <tbody id="tbody">
                                <?php 
                                 $x=1;
                                 while($photo=mysqli_fetch_array($result))
                             {

                                 ?>
                                <tr>
                                    <td>
                                        <?php echo htmlentities($x); ?>
                                    </td>
                                     <td>
                                            <img src="photo/<?php echo $photo['photo']?>" alt="" class="rounded" >
                                    </td>
                                    <td>
                                          <?php if($photo['plus2']==1) {?><i class="fa fa-check"></i><?php } ?>
                                    </td>
                                    <td> <?php if($photo['school']==1) {?><i class="fa fa-check"></i><?php } ?></td>
                                    <td> <?php if($photo['engineering']==1) {?><i class="fa fa-check"></i><?php } ?></td>
                                   
                                    <td>
                                        <a href="gallery1.php?type=edit&&id=<?php echo htmlentities($photo['id']); ?>"><i class="fa fa-edit"> </i></a>

                                        <a href="upload.php?delete&&id=<?php echo htmlentities($photo['id']); ?>"><i class="fa fa-trash"> </i></a>
                                    </td>

                                    

                                
                                    
                                </tr>
                                <?php 
                              $x++;
                            }

                              
                              ?>
                              </tbody>
                              
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

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<script>
  var student;

 function deletes(key)
  {
      $('#injectdelete').html("");
      $('.modal-body').html("");
     var modal=" student with <b>"+key+" </b> is going to be delete";
    var a="<a href='delete.php?type=engineering_student&&id="+key+"' class='btn btn-danger'>delete</a>";
        $("#injectdelete").append(a);
         $('.modal-body').append(modal);
    
    $('#delete').modal('show');
      
    
  }

  $(document).ready(function(){

    var search_value=$('#search').val();
if(!search_value=='')
{
   call_data(search_value);
}
  });


 
    $('#search').keyup(function(){
      var search=$('#search').val();
      
     call_data(search);
    });

        function call_data(search) {
            $.ajax({
                 

                type: 'get',
                url: 'ajax_fetch_data/engineering_stu.php',
                data: { search:search },
                dataType: "json",
                success: function(response) {
                   
                     student=response;
                    filltable();
                   

                }
            });

        }



        function filltable() {
            $("#tbody").html("");

            if (student.length === 0) {
                var tr_str = "<tr>" +
                    "<td rowspan='3'>" + "<h5>No result</h5> " + "</td>" +

                    "</tr>";

                $("#tbody").append(tr_str);

            } else {

                var x = 1;
                for (var i = 0; i < student.length; i++) {
                    
                    var tr_str = "<tr>" +
                        "<td scope='row' >" + x + "</td>" +
                        "<td >" + student[i].uniquecode+ "</td>" +
                        "<td >" + student[i].firstname+" "+student[i].lastname + "</td>" +
                        "<td >" +
                          "<a href='school_stu_registration.php?type=edit&&id="+student[i].uniquecode+" '><i class='fa fa-edit'></i></a> " +" "+
                       
                          "<a onclick="+"deletes('"+student[i].uniquecode+"')"+"   href='#'  ><i class='fa fa-trash'></i></a> " + "</td>" +
                        "</tr>" ;




                    $("#tbody").append(tr_str);

                    x++;

                }
            

                



            }



        }

</script>

</html>