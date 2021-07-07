  <?php
session_start();
include('include/connection.php');

include('include/middleware.php');

$id=$_GET['id'];
$sql="select * from admissions where id='$id' limit 1";
$result=mysqli_query($db,$sql);
$admission=mysqli_fetch_assoc($result);
 $management='set';



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/admission/css/style.css" />
      <link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>

    <title>Admission Form </title>

    <!-- title icon -->
    <link rel="shortcut icon" href="images/logo.png" />

    <style>
      @media print{
       body *{
        visibility: hidden;
       }
       .area-to-print, .area-to-print *{
        visibility: visible;
       }
    </style>
  </head>
  <body>
  
     
     <div class="container">
          <button class="btn btn-primary mt-3" href="javascript:void(0);"  onclick="window.print()">print</button>
     </div>

    <!-- form -->
 <div class="container">
      <div class="form-container">
        <div class="row">
          <div class="school-info col-lg-4 col-sm-12 col-md-12">
            <div class="form-title">
              <h4>Education for Enlightenment!</h4>
            </div>
          </div>
          <div class="admission-form col-lg-12 col-sm-12 col-md-12">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">First Name</label>
                  <input
                  disabled
                    id="f_name"
                    type="text"
                    name= "f_name"
                    class="form-control"
                    placeholder="First name"
                    required
                    value="<?php echo htmlentities($admission['f_name']);?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input
                  disabled
                    id="m_name"
                  name="m_name"
                    type="text"
                    class="form-control"
                    placeholder="Middle name"
                    value="<?php echo htmlentities($admission['m_name']);?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input
                  disabled
                     id="l_name"
                   name="l_name"
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    id="lastName"
                    required
                    value="<?php echo htmlentities($admission['l_name']);?>"
                    
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Date of Birth</label>
                  <input
                  disabled
                     id="dob"
                    name="dob"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                    required
                     value="<?php echo htmlentities($admission['dob']);?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-4">
                  <label for="gender">Gender: </label>
                  <div class="form-check-inline">
                     <input 
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="exampleRadios1"
                      value="option1"
                      <?php if ($admission['gender']=="male")
                      {

                             echo"checked";
                      }else
                      {
                        echo "disabled";
                      }
                        ?>
                      
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Male
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input 
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="exampleRadios2"
                      value="option2"
                       <?php if ($admission['gender']=="female")
                       {

                             echo"checked";
                        }else
                        {
                          echo "disabled";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Female
                    </label>
                  </div>
                </div>
                
              </div>
              
               <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Nationality</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Nationality"
                    name="nationality"
                    value="<?php echo htmlentities($admission['nationality'])?>"
                  />
                </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mobile No.</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Mobile No."
                    name="mobilenumber"
                    value="<?php echo htmlentities($admission['mobile_no']) ?>"
                  />
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">E-mail</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="example@email.com"
                    name="email"
                    value="<?php echo htmlentities($admission['email']) ?>"
                  />
                </div>
                
              </div>
              <h5>Permanent Address</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="zone"
                    value="<?php echo htmlentities($admission['per_zone']) ?>"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="province"
                    value="<?php echo htmlentities($admission['per_province']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="district"
                    value="<?php echo htmlentities($admission['per_district']) ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    name="municiipality"
                    value="<?php echo htmlentities($admission['per_municipality']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="wardno"
                    value="<?php echo htmlentities($admission['per_wardno']) ?>"
                  />
                </div>
              </div>
              <br>
              <h5>Temporary Address</h5>
              
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                 <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="zone1"
                    value="<?php echo htmlentities($admission['temp_zone']) ?>"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="province1"
                    value="<?php echo htmlentities($admission['temp_province']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input disabled disabled
                  disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="district1"
                    value="<?php echo htmlentities($admission['temp_district']) ?>"
 
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input 
                  disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    name="municipality1"
                    value="<?php echo htmlentities($admission['temp_municipality']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input 
                  disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="warno1"
                    value="<?php echo htmlentities($admission['temp_wardno']) ?>"
                  />
                </div>
              </div>
              <h5>Parent's / Guardian's Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Father's Name</label>
                  <input

                    name="father_name"
                    type="text"
                    class="form-control"
                    placeholder="Father's name"
                    required
                    disabled
                    value="<?php echo htmlentities($admission['father_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                  name="father_contact"
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    required
                     disabled
                    value="<?php echo htmlentities($admission['father_contact']) ?>"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="father_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    disabled
                    value="<?php echo htmlentities($admission['father_occupation']) ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mother's Name</label>
                  <input
                    name="mother_name"
                     type="text"
                    class="form-control"
                    placeholder="Mother's name"
                    required
                     disabled
                    value="<?php echo htmlentities($admission['mother_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                  name="mother_contact"
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    required
                     disabled
                    value="<?php echo htmlentities($admission['mother_contact']) ?>"
                  />
                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="mother_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    disabled
                    value="<?php echo htmlentities($admission['mother_occupation']) ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Guardian's Name</label>
                  <input
                    name="guardian_name"
                    type="text"
                    class="form-control"
                    placeholder="Guardian's name"
                    required
                     disabled
                    value="<?php echo htmlentities($admission['guardian_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                 <input
                    name="guardian_contact"
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    required
                     disabled
                    value="<?php echo htmlentities($admission['guardian_contact']) ?>"
                  />
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="guardian_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    disabled
                    value="<?php echo htmlentities($admission['guardian_occupation']) ?>"
                  />
                </div>
              </div>
              <h5>Academic Record</h5>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">School Name</label>
                  <input
                    name="school_name"
                    type="text"
                    class="form-control"
                    placeholder="Enter School Name"
                     disabled
                    value="<?php echo htmlentities($admission['school_name']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input
                     
                    name="school_passed_year"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                      disabled
                    value="<?php echo htmlentities($admission['school_passed_year']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">SLC/SEE GPA Point</label>
                  <input
                    name="school_gpa"
                    type="text"
                    class="form-control"
                    placeholder="Enter SEE GPA Point"
                    disabled
                    value="<?php echo htmlentities($admission['school_gpa']) ?>"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">English</label>
                  <input
                    name="school_english"
                    type="text"
                    class="form-control"
                    placeholder="Enter English Marks"
                    disabled
                    value="<?php echo htmlentities($admission['school_English']) ?>"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    name="school_science"
                    type="text"
                    class="form-control"
                    placeholder="Enter Science Marks"
                    disabled
                    value="<?php echo htmlentities($admission['school_science']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input
                    name="school_math"
                    type="text"
                    class="form-control"
                    placeholder="Enter math Marks"
                   disabled
                    value="<?php echo htmlentities($admission['school_math']) ?>"
                  />
                </div>

              </div>
               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">High School/+2 Name</label>
                 <input
                    name="plus2_collage_name"
                    type="text"
                    class="form-control"
                    placeholder="Enter Plus 2 Name"
                    disabled
                    value="<?php echo htmlentities($admission['plus2_collage_name']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                   <input
                     
                    name="plus2_passed_year"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                      disabled
                    value="<?php echo htmlentities($admission['plus2_passed_year']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">+2/PCL GPA Point</label>
                  <input
                    name="plus2_gpa"
                    type="text"
                    class="form-control"
                    placeholder="Enter +2/PCL GPA Point"
                   disabled
                    value="<?php echo htmlentities($admission['plus2_gpa']) ?>"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">English</label>
                  <input
                    name="plus2_english"
                    type="text"
                    class="form-control"
                    placeholder="Enter math Marks"
                    disabled
                    value="<?php echo htmlentities($admission['plus2_English']) ?>"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    name="plus2_science"
                    type="text"
                    class="form-control"
                    placeholder="Enter Science Marks"
                   disabled
                    value="<?php echo htmlentities($admission['plus2_science']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input
                    name="plus2_math"
                    type="text"
                    class="form-control"
                    placeholder="Enter math Marks"
                    disabled
                    value="<?php echo htmlentities($admission['plus2_math']) ?>"
                  />
                </div>
              </div>

              <h6>ELECTIVE SUBJECT </h6>
              <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">ELECTIVE I</label>
                  <input
                    name="elective"
                    type="text"
                    class="form-control"
                    placeholder="Enter Elective Subject Marks"
                   disabled
                    value="<?php echo htmlentities($admission['elective']) ?>"
                  />
                </div>
                
              </div>
                <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">SELECTED FACULTY</label>
              
                   <select name="faculty" class="form-control">
                    <option value="BBS" <?php if($admission['faculty']=="BBS") echo "selected"; else echo "disabled"; ?> >BBS</option>
                    <option value="B.ED" <?php if($admission['faculty']=="B.ED") echo "selected"; else echo "disabled"; ?>>B.ED</option>
                    <option value="B.A" <?php if($admission['faculty']=="B.A") echo "selected"; else echo "disabled"; ?>>B.A</option>
                    
                  </select>
                </div>
                
              </div>
              <h5>Important Documents</h5>
               <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >SEE/SLC Gradesheet</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=slcgradesheet">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=slccharacter">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >+2 Transcript Photocopy</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=plus2_transcript">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >+2 Character Certificate</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=plus2_character">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Migration Certificate Photocopy</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=migration">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Provisional Certificate Photocopy</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=provisional">download  <i class="fa fa-download"></i> </a>
                   </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Citizenship Photocopy</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=citizenship">download  <i class="fa fa-download"></i> </a>
                   </div>


                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&type=pp">download  <i class="fa fa-download"></i> </a>
                   </div>
              </div>
              
            

    <!-- javascripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>


    <!-- javascripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
