<?php
session_start();
include('include/check_login.php');
include('../include/connection.php');
if(isset($_GET['type']))
{
  $edit='set';
  $id=$_GET['id'];
  $sql="select * from resources where id='$id' limit 1";
 $result=mysqli_query($db,$sql);
 $resource=mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="gal.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gal.css">
</head>
<body>

<!-- top banner -->
    
   <?php include 'include/topbar.php'; ?>


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
          <div class="col-11">Post Resources</div>
          </div>
          <div class="row">
            <textarea name="caption" style="height: 50px;"><?php if(isset($edit)){echo $resource['caption'];} ?></textarea>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              Choose images
              <input type="file" name="image" > 
              
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px;">
              Choose pdf file
              <input type="file" name="pdf" > 
              
            </div>
          </div>



        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              Choose Year<br>
               <select name="year" id="year" required>
               <option selected disabled>choose year</option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="third">Fourth</option>

              </select> 
              
              
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px; margin-left: 5px;">
        
                   Choose faculty<br>
             <!--     <input type="text" name="faculty" > -->
                 <select name="faculty" id='faculty' required>
                <option selected disabled>choose faculty</option>

                   <option value="bbs">BBS</option>
                   <option value="bed">B.ED</option>
                   <option value="ba">B.A</option>
                 </select>
              
            </div>
          </div>

          <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px; margin-bottom: px;">
             Choose subject<br>
            <!--  <input type="text" name="subject" >  -->
            <select name="subject" id="subject" required>
              <option selected disabled>choose subject</option>
              
            </select>
             
            
            </div>
          
        
          </div>
          <br>

            <div class="col-lg-6 col-md-4 col-sm-4"><p style=" margin-left: 280px;">
            <button type="submit" name="submit" class="btn btn-success" style="border: none; border-radius: 20px; margin-top: 5px; float: right;">POST</button>

            </p></div>
          </div></div></form>


          

</div>
</div></div>
</body>

<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script >
   var first_year_first_sem="<option selected disabled>choose Subject</option>"+
                        "<option value='Engineering Chemistry I'>Engineering Chemistry I</option>"+
                        "<option value='Engineering Physics I'>Engineering Physics I</option>"+
                        "<option value='Engineering Mathematics I'>Engineering Mathematics I</option>"+
                        "<option value='Engineering Drawing I'>Engineering Drawing I</option>"+
                        "<option value='Communication Nepali'>Communication Nepali</option>"+
                        "<option value='Communication English'>Communication English</option>"+
                        "<option value='Computer Programming In C'>Computer Programming In C</option>"+
                        "<option value='Computer Fundaments'>Computer Fundaments</option>";

    var first_year_second_sem="<option selected disabled>choose Subject</option>"+                      
                              "<option value='Engineering Mathematics II'>Engineering Mathematics II </option>"+ 
                               " <option value='Engineering Physics II'>Engineering Physics II </option>"+  
                              "<option value='Engineering Chemistry II'> Engineering Chemistry II</option>"+  
                              "<option value='Digital Logic'>Digital Logic </option> "+ 
                              "<option value='Object Oriented Programming in C++'>Object Oriented Programming in C++ </option>"+  
                              "<option value='Electrical Engineering'>Electrical Engineering </option> "+ 
                              "<option value='Web Technology & Programming I'> Web Technology & Programming I</option>";

  var second_year_first_sem="<option selected disabled>choose Subject</option>"+
                           "<option value='Web Technology and Programming II'>Web Technology and Programming II</option>"+
                           "<option value='Engineering Mathematics III'>Engineering Mathematics III</option>"+
                           "<option value='Data Structure & Algorithm'>Data Structure & Algorithm</option>"+
                           "<option value='Microprocessors'>Microprocessors</option>"+
                           "<option value='Electronic Devices & Circuits'>Electronic Devices & Circuits</option>"+
                           "<option value='Database Management System'>Database Management System</option>";

   var second_year_second_sem="<option selected disabled>choose Subject</option>"+
                           "<option value='Data Communication'>Data Communication</option>"+
                           "<option value='System Analysis and Design'>System Analysis and Design</option>"+
                           "<option value='Visual programming'>Visual programming</option>"+
                           "<option value='Computer Architecture'>Computer Architecture</option>"+
                           "<option value='Computer Repair & Maintenance'>Computer Repair & Maintenance</option>"+
                           "<option value='Computer Graphics'>Computer Graphics</option>"+
                           "<option value='Statistics & Probability'>Statistics & Probability</option>";


var third_year_first_sem="<option selected disabled>choose Subject</option>"+
                      "<option value='Computer Networks'>Computer Networks</option>"+
                      "<option value='Management Information System'>Management Information System</option>"+
                      "<option value='Applied Telecommunication'>Applied Telecommunication</option>"+
                      "<option value='Distributed Computing'>Distributed Computing</option>"+
                      "<option value='Operating System'>Operating System</option>"+
                      "<option value='Cyber security and social ethic'>Cyber security and social ethic</option>"+
                      "<option value='Minor Project'>Minor Project</option>"+
                      "<option disabled>Elective I</option>"+
                      "<option value='Geographical Information System'>Geographical Information System</option>"+
                      "<option value='Computer Simulation and Modeling'>Computer Simulation and Modeling</option>"+
                      "<option value='Java Programming'>Java Programming</option>";

  var third_year_second_sem="<option selected disabled>choose Subject</option>"+
                   "<option value='Multimedia Technology'>Multimedia Technology</option>"+
                    "<option value='Internet Technology'>Internet Technology</option>"+
                    "<option value='Data Mining'>Data Mining</option>"+
                    "<option value='Software Engineering'>Software Engineering</option>"+
                    "<option value='Major Project'>Major Project</option>"+
                    "<option  disabled>Elective-II</option>"+
                   " <option value='E-governance'>E-governance</option>"+
                    "<option value='E-commerce'>E-commerce</option>"+
                   " <option value='Embedded System'>Embedded System</option>";



      //civil

      var civil_first_year_first_sem="<option selected disabled>choose Subject</option>"+
                                    "<option value='Communication Nepali'>Communication Nepali</option>"+
                                    "<option value='Communication English'>Communication English</option>"+
                                    "<option value='Engineering Mathematics I'>Engineering Mathematics I</option>"+
                                    "<option value='Engineering Physics I'>Engineering Physics I</option>"+
                                    "<option value='Engineering Chemistry I'>Engineering Chemistry I</option>"+
                                    "<option value='Engineering Drawing I'>Engineering Drawing I</option>"+
                                    "<option value='Workshop Practice I'>Workshop Practice I</option>";

        var civil_first_year_second_sem="<option selected disabled>choose Subject</option>"+
                                   "<option value='Engineering Mathematics II'>Engineering Mathematics II</option>"+
                                   "<option value='Engineering Physics II'>Engineering Physics II</option>"+
                                   "<option value='Engineering Chemistry II'>Engineering Chemistry II</option>"+
                                   "<option value='Engineering Drawing II'>Engineering Drawing II</option>"+
                                   "<option value='Workshop Practice II'>Workshop Practice II</option>"+
                                   "<option value='Engineering Materials'>Engineering Materials</option>"+
                                   "<option value='Computer Application'>Computer Application</option>";

       var civil_second_year_first_sem="<option selected disabled>choose Subject</option>"+
                                   "<option value='Engineering Mathematics III'>Engineering Mathematics III</option>"+
                                   "<option value='Surveying I'>Surveying I</option>"+
                                   "<option value='Applied Mechanics'>Applied Mechanics</option>"+
                                   "<option value='basic Hydrolics'>Basic Hydrolics</option>"+
                                   "<option value='Building Construction'>Building Construction</option>"+
                                   "<option value='Construction Drawing'>Construction Drawing</option>"+
                                   "<option value='Computer Aided Drawing'>Computer Aided Drawing</option>";




       var civil_second_year_second_sem="<option selected disabled>choose Subject</option>"+
                                   "<option value='Social Studies'>Social Studies</option>"+
                                   "<option value='Management'>Management</option>"+
                                   "<option value='Surveying II'>Surveying II</option>"+
                                   "<option value='Estimating And Costing I'>Estimating And Costing I</option>"+
                                   "<option value='Mechanics of Structure'>Mechanics of Structure</option>"+
                                   "<option value='Soil Mechanics'>Soil Mechanics</option>"+
                                   "<option value='Water Supply Engineering'>Water Supply Engineering</option>";


       var civil_third_year_first_sem="<option selected disabled>choose Subject</option>"+
                                   "<option value='Surveying II'>Surveying II</option>"+
                                   "<option value='Estimating And Costing II'>Estimating And Costing II</option>"+
                                   "<option value='Structural Design and Drawing'>Structural Design and Drawing</option>"+
                                   "<option value='Highway Engineering I'>Highway Engineering I</option>"+
                                   "<option value='Sanitary Engineering'>Sanitary Engineering</option>"+
                                   "<option value='Construction Management'>Construction Management</option>"+
                                   "<option value='Minor Project'>Minor Project(Survey Camp)</option>";

       var civil_third_year_second_sem="<option selected disabled>choose Subject</option>"+
                                  "<option value='Enterprenurship Development'>Enterprenurship Development</option>"+
                                  "<option value='Highway Engineering II'>Highway Engineering II</option>"+
                                  "<option value='Estimating And Costing III'>Estimating And Costing III</option>"+
                                  "<option value='Irrigation and Drainage Engineering'>Irrigation and Drainage Engineering</option>"+
                                  "<option value='Major Project'>Major Project</option>"+
                                  "<option  disabled>Elective</option>"+
                                  "<option value='Trial Bridge'>Trial Bridge</option>"+
                                  "<option value='Hill Road'>Hill Road</option>"+
                                  "<option value='Hill Irrigation Engineering'>Hill Irrigation Engineering</option>"+
                                  "<option value='Rural'>Rural/Agricultural Road</option>"+
                                  "<option value='Gravity flow Water Supply System'>Gravity flow Water Supply System</option>";


  

  $('#faculty').change(function(){
     var year=$('#year').val();
     var semester=$('#semester').val();
     var  faculty=$('#faculty').val();
     fill_subject(year,semester,faculty);
    
  });

  $('#year').change(function(){
     var year=$('#year').val();
     var semester=$('#semester').val();
     var  faculty=$('#faculty').val();
     fill_subject(year,semester,faculty);
    
  });

  $('#semester').change(function(){
     var year=$('#year').val();
     var semester=$('#semester').val();
     var  faculty=$('#faculty').val();
     fill_subject(year,semester,faculty);
    
  });

  function fill_subject(year,semester,faculty)
  {
     
      if(year==null || semester==null || faculty==null)
      {

      }
    else{

      $('#subject').html('');
    if(faculty=='computer')
    {
      if(year=='first' && semester=='first')
      {
           $('#subject').append(first_year_first_sem);
      }
      if(year=='first' && semester=='second')
      {
            $('#subject').append(first_year_second_sem);
      }
      if(year=='second' && semester=='first')
      {
             $('#subject').append(second_year_first_sem);
      }
      if(year=='second' && semester=='second')
      {
              $('#subject').append(second_year_second_sem);
      }
      if(year=='third' && semester=='first')
      {
               $('#subject').append(third_year_first_sem);
      }
      if(year=='third' && semester=='second')
      {
                $('#subject').append(third_year_second_sem);
      }
    }

  if(faculty=='civil')
    {
       if(year=='first' && semester=='first')
      {
           $('#subject').append(civil_first_year_first_sem);
      }
      if(year=='first' && semester=='second')
      {
            $('#subject').append(civil_first_year_second_sem);
      }
      if(year=='second' && semester=='first')
      {
             $('#subject').append(civil_second_year_first_sem);
      }
      if(year=='second' && semester=='second')
      {
              $('#subject').append(civil_second_year_second_sem);
      }
      if(year=='third' && semester=='first')
      {
               $('#subject').append(civil_third_year_first_sem);
      }
      if(year=='third' && semester=='second')
      {
                $('#subject').append(civil_third_year_second_sem);
      }

    }

  }

  }
</script>
</body>
</html>