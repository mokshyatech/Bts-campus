<?php
session_start();
include('include/connection.php');
$sql="select *from college order by id desc ";
$result=mysqli_query($db,$sql);
$students='set';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Collage Student Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
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
                <div class="container uploadsection">
                    <div class="head">
                        <p><span class="span">Management Student</span></p>
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
                    <p style="display: inline-flex;">
                        <input type="text" name="search" placeholder=" search " onkeyup="search" id='search' style="border-radius:5px;border: blue;  "><i class='fa fa-search' style="margin-left: px; margin-top: 4px;"> </i>
                    </p>
                    <p style="display: inline-flex;">
                        <a href="collage_student_registration.php" class="btn btn-primary" style="background-color: #224a8f; border: none; border-radius: 20px; margin-bottom: 5px; float: right;  margin-left: 20px;">register</a>
                    </p>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <table class="table">
                                <thead class="blue ">
                                    <tr>
                                        <TH>SN</TH>
                                         <th>Name</th>
                                        <th>UNIQUECODE</th>
                                       
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <?php 
                                 $x=1;
                                 while($student=mysqli_fetch_array($result))
                             {

                                 ?>
                                    <tr>
                                        <td>
                                            <?php echo htmlentities($x); ?>
                                        </td>
                                        <td>
                                            <?php echo  htmlentities($student['firstname']);  echo  htmlentities($student['lastname']);?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($student['uniquecode']); ?>
                                        </td>
                                        <td>
                                            <a href="collage_student_registration.php?type=edit&&id=<?php echo htmlentities($student['uniquecode']); ?>"><i class="fa fa-edit"> </i></a>
                                            <a href="" data-toggle="modal" data-target="#exampleModalLong-<?php echo htmlentities($student['uniquecode']);?>">
                                                <i class="fa fa-trash"> </i>
                                            </a>
                                        </td>
                                        <div class="modal fade" id="exampleModalLong-<?php echo htmlentities($student['uniquecode']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Student with <b>
                                                            <?php echo htmlentities($student['uniquecode']); ?></b> is going to be delete
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a class="btn btn-danger" href="delete.php?type=collage_student&&id=<?php echo htmlentities($student['id']); ?>">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <p id="injectdelete"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
</body>
<script src="script.js"></script>
<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://codepb.github.io/jquery-template/jquery.loadTemplate-0.4.3.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
</body>
<script>
var student;

function deletes(key) {
    $('#injectdelete').html("");
    $('.modal-body').html("");
    var modal = " One Collage Student is going to be delete";
    var a = "<a href='delete.php?type=collage_student&&id=" + key + "' class='btn btn-danger'>delete</a>";
    $("#injectdelete").append(a);
    $('.modal-body').append(modal);

    $('#delete').modal('show');
   }



$(document).ready(function() {



    var search_value = $('#search').val();
    if (!search_value == '') {
        call_data(search_value);
    }
});



$('#search').keyup(function() {
    var search = $('#search').val();

    call_data(search);
});

function call_data(search) {
    $.ajax({


        type: 'get',
        url: 'ajax_fetch_data/collage_student.php',
        data: { search: search },
        dataType: "json",
        success: function(response) {

            student = response;
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

        $("#tbody").html("");


        var x = 1;
        for (var i = 0; i < student.length; i++) {


            var tr_str = "<tr>" +
                "<td scope='row' >" + x + "</td>" +
               
                "<td >" + student[i].firstname + " " + student[i].lastname + "</td>" +
                 "<td >" + student[i].uniquecode + "</td>" +
                "<td >" +
                "<a href='collage_student_registration.php?type=edit&&id=" + student[i].uniquecode + " '><i class='fa fa-edit'></i></a> " + " " +

                "<a onclick=" + "deletes('" + student[i].id + "')" + "   href='#'  ><i class='fa fa-trash'></i></a> " + "</td>" +
                "</tr>";




            $("#tbody").append(tr_str);

            x++;

        }






    }



}
</script>

</html>