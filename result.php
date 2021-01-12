<?php
session_start();
$code=$_SESSION['code']; 



?>
<!DOCTYPE html>
<html>

<head>
    <title>BTS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.0/jquery.PrintArea.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./results.css">
         <link rel="stylesheet" href="frontpage/css/style.css" />

</head>

<body>
    <style>
        .selected
    {
      text-decoration: underline;
    }

    @media print{
       body *{
        visibility: hidden;
       }
       .area-to-print, .area-to-print *{
        visibility: visible;
       }


    }
  </style>
  <!-- top banner -->
    <?php include"include/banner.php";?>
    <!-- top banner -->
     
    <?php include"include/navbar.php";?>
      
   
    <!-- message section -->
    <div class="area-to-print">
    <div class="container-fluid">
      
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h6>NAME:
                    <?php echo $_SESSION['login_user'];?>
                </h6>
                <?php 
                    
                    $show_drop_down=true;
                        
                     include "include/connection.php";


                      $sql1="select distinct faculty from results where uniquecode='$code'";

                      $query1=mysqli_query($db,$sql1);
                      if(is_null($query1) == true){
                           $show_drop_down=false;
                         }


                      $class=[];
                      while($row=mysqli_fetch_array($query1))
                      {
                         $class[]=$row['class'];
                      }
                       
                    
                                              
                      $sql="select *from collegeresult where uniquecode='$code' LIMIT 1 ";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>
                <h6>CLASS:
                    <?php if($show_drop_down==false)
           { echo "no class";
           }
         
          else
        {
          ?>
                    <select id="class">
                        <?php 
               foreach ($class as $value) {
           

          ?>
                        <option value="<?php echo $value ?>">
                            <?php echo $value ?>
                        </option>
                        <?php } ?>
                    </select>
                    <?php }?>
                </h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h6>ROLL:
                    
                </h6>
                <?php } ?>
                <h6>SECTION:</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12" style="font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Full marks</th>
                            <th scope="col">Pass marks</th>
                            <th scope="col">Marks Obtained</th>
                            <th scope="col">Remarks</th>
                        </tr>
                    </thead>
                    <tbody id='tbody'>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 termsection">
              
                            <h4 style="border:1px solid #1a237e;
   color: white;
    background-color:#1a237e;
    text-align: center;">TERMS</h4>
                        
              <div class="termslist ">
                        
                <div class="container-fluid">
                    
                        <div class="row selected" id="first"><a href="#" type="button" onclick="load_on_term(1)">First term </a></div>
                        <div class="row " id="second"><a href="#" onclick="load_on_term(2)">Second term</a></div>
                        <div class="row " id="third"><a href="#" onclick="load_on_term(3)">Third term</a></div>
                        <div class="row " id="fourth"><a href="#" onclick="load_on_term(4)">Forth term</a></div>
                        <a class="btn btn-primary mt-3 ml-4 mb-3" href="javascript:void(0);"  onclick="window.print()">print </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h6>TOTAL OPERATING DAYS:</h6>
                        <h6>TOTAL ATTENDANCE DAYS:</h6>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h6>PERCENTAGE:<span id="percentage"></span>%</h6>
                        <h6>DIVISION:</h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h6>PRINCIPAL:</h6>
                        <h6>TERM:</h6>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
        <!-- footer -->

       <?php include('../include/footer.php'); ?>

        <input type="hidden" id="uniquecode" value="<?php echo $code; ?>">
        <script>
        var result = [];
        var total=0;
        var percentage=0;
        var uniquecode = $('#uniquecode').val();
        var stu_class = $('#class option:selected').val();
        var selected_term = 1;

        $('#class').change(function(){

          var stu_class =$('#class option:selected').val();

          call_data(selected_term,stu_class);
        });

        $(document).ready(function() {
            

          $('#print').click(function(){

            var mode='iframe';
            var close=mode=="popup";
            var options={mode:mode,popClose:close};
            $('div.area-to-print').printArea(options);
          });



            var term = 1;

            call_data(term, stu_class);
            $('#class :selected').text();




        });


        function load_on_term(term) {
          var stu_class =$('#class option:selected').val();
            underline_term(term);



            call_data(term, stu_class);

        }

        function underline_term(term) {
            if (term == 1) {
                $('#first').addClass('selected');
                remove_underlineon_term(selected_term);
                selected_term = 1;
            }

            if (term == 2) {
                $('#second').addClass('selected');
                remove_underlineon_term(selected_term);
                selected_term = 2;
            } else if (term == 3) {
                $('#third').addClass('selected');
                remove_underlineon_term(selected_term);
                selected_term = 3;

            } else if (term == 4) {
                $('#fourth').addClass('selected');
                remove_underlineon_term(selected_term);
                selected_term = 4;
            }

        }

        function remove_underlineon_term(term) {
            if (term == 1) {
                $('#first').removeClass('selected');

            } else if (term == 2) {
                $('#second').removeClass('selected');


            } else if (term == 3) {
                $('#third').removeClass('selected');


            } else if (term == 4) {
                $('#fourth').removeClass('selected');

            }

        }

        function call_data(term, stu_class) {
            $.ajax({


                type: 'get',
                url: 'fetch_result.php',
                data: { class: stu_class, uniquecode: uniquecode, term: term },
                dataType: "json",
                success: function(response) {
                    result='';
                    total=0;
                    percentage=0;

                    result = response;
                    $('#percentage').text('');
                    filltable();

                }
            });

        }

        function filltable() {
            $("#tbody").html("");

            if (result.length === 0) {
                var tr_str = "<tr>" +
                    "<td rowspan='3'>" + "<h5>No result</h5> " + "</td>" +

                    "</tr>";

                $("#tbody").append(tr_str);

            } else {

                var x = 1;
                for (var i = 0; i < result.length; i++) {
                     total=total+parseInt(result[i].marks);


                    var tr_str = "<tr>" +
                        "<th scope='row' >" + x + "</td>" +
                        "<td >" + result[i].subject + "</td>" +
                        "<td >" + ".." + "</td>" +
                        "<td >" + ".."+ "</td>" +
                        "<td >" + result[i].marks + "</td>" +
                        "<td >" + ".." + "</td>" +
                        
                        "</tr>";



                    $("#tbody").append(tr_str);

                    x++;

                } percentage=((total)/(result.length*100))*100;

            var per=percentage.toFixed(2)

               $('#percentage').text(per);


            

            }

        }

        $("#class").change(function() {
            var stu_class = $('#class option:selected').val();

            var term = 1;

            call_data(term, stu_class)





        })

        </script>
        <script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>