<?php
  session_start();
  include"include/connection.php";
  $admission=true;  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="frontpage/admission/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/admission/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/admission/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/admission/css/style.css" />
      <link rel="shortcut icon" href="frontpage/images/logo1.jpg" />
      <link rel="stylesheet" href="frontpage/css/style.css" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
<style>
   .error
   {
     color: red;
     text-decoration: italic;
   }
    </style>
    <title>Admission </title>

    <!-- title icon -->
    <link rel="shortcut icon" href="#" />
  </head>
  <body>
    <?php if(isset($_SESSION['error']))
      { 
      ?>
    <div class="container alert alert-danger" role="alert">
      <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
   </div>
 <?php } ?>

    <?php include('include/banner.php'); ?>
    <?php include 'include/navbar.php'; ?>
    <div class="title">
      <h4>Course Structure</h4>
    </div>
    <!-- course structure -->
    <div class="container">
      <div class="col-lg-8 offset-lg-2 col-sm-12 col-md-10 offset-md-1">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="m-0">
                <button class="btn btn-link job-title">BBS</button>
                <button
                  class="btn btn-link"
                  data-toggle="collapse"
                  data-target="#collapseOne"
                  aria-expanded="true"
                  style="float: right"
                  aria-controls="collapseOne"
                >
                  View&nbsp; Details <i class="fa fa-chevron-down"></i>
                </button>
              </h5>
            </div>

            <div
              id="collapseOne"
              class="collapse"
              aria-labelledby="headingOne"
              data-parent="#accordion"
            >
              <div class="card-body">
                <div class="job-info">
                  <h5>Compulsory Subjects</h5>

                  <ul class="card-list">
                    <li>C. English</li>
                    <li>POM</li>
                    <li>Accountancy</li>
                    <li>Business Statistics</li>
                    <li>Economics</li>
                  </ul>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8 offset-lg-2 col-sm-12 col-md-10 offset-md-1">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="m-0">
                <button class="btn btn-link job-title">B.ED</button>
                <button
                  class="btn btn-link"
                  data-toggle="collapse"
                  data-target="#collapseTwo"
                  aria-expanded="true"
                  style="float: right"
                  aria-controls="collapseTwo"
                >
                  View&nbsp; Details <i class="fa fa-chevron-down"></i>
                </button>
              </h5>
            </div>

            <div
              id="collapseTwo"
              class="collapse"
              aria-labelledby="headingTwo"
              data-parent="#accordion"
            >
              <div class="card-body">
                <div class="job-info">
                  <h5>Compulsory Subjects</h5>

                  <ul class="card-list">
                    <li>C. English</li>
                    <li>C. Nepali</li>
                    <li>Found Of Edu</li>
                    <li>Maj.English</li>
                    <li>Maj.Health & phy .Edu</li>
                    <li>Maj.Nepali</li>
                  </ul>

                 

                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       <div class="col-lg-8 offset-lg-2 col-sm-12 col-md-10 offset-md-1">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="m-0">
                <button class="btn btn-link job-title">B.A</button>
                <button
                  class="btn btn-link"
                  data-toggle="collapse"
                  data-target="#collapseThree"
                  aria-expanded="true"
                  style="float: right"
                  aria-controls="collapseThree"
                >
                  View&nbsp; Details <i class="fa fa-chevron-down"></i>
                </button>
              </h5>
            </div>

            <div
              id="collapseThree"
              class="collapse"
              aria-labelledby="headingTwo"
              data-parent="#accordion"
            >
              <div class="card-body">
                <div class="job-info">
                  <h5>Compulsory Subjects</h5>

                <ul class="card-list">
                    <li>C. English</li>
                    <li>C. Nepali</li>
                    
                    <li>Maj.Sociology</li>
                    <li>Maj.English</li>
                  </ul>

                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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
            <form action="include/insert.php" method="POST" enctype="multipart/form-data">
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">First Name</label>
                  <input
                    id="f_name"
                    type="text"
                    name= "f_name"
                    class="form-control"
                    placeholder="First name"
                    required
                    value="<?php if(isset($_SESSION['f_name'])){echo $_SESSION['f_name'];} unset($_SESSION['f_name'])?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input
                    id="m_name"
                  name="m_name"
                    type="text"
                    class="form-control"
                    placeholder="Middle name"

                    value="<?php  if(isset($_SESSION['m_name'])) { echo $_SESSION['m_name']; } unset($_SESSION['m_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input
                     id="l_name"
                   name="l_name"
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    id="lastName"
                    required
                    value="<?php  if(isset($_SESSION['l_name'])) { echo $_SESSION['l_name']; } unset($_SESSION['l_name']) ?>"
                    
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Date of Birth</label>
                  <input
                     id="dob"
                    name="dob"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                    required
                      value="<?php  if(isset($_SESSION['dob'])) { echo $_SESSION['dob']; } unset($_SESSION['dob']) ?>"
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
                      value="male";
                      <?php
                        if(isset($_SESSION['gender']))
                        {
                          if($_SESSION['gender']=='male')
                          {
                            echo "checked";
                            unset($_SESSION['gender']);
                          }
                        }
                       else
                       {
                        echo "checked";
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
                      value="female"
                    <?php
                         if(isset($_SESSION['gender']))
                        {
                          if($_SESSION['gender']=='female')
                          {
                            echo "checked";
                            unset($_SESSION['gender']);
                          }
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
                  <label for="firstName">Nationality</label>
                 <input
                     name="nationality"
                    type="text"
                    class="form-control"
                    placeholder="Nationality"
                     value="<?php  if(isset($_SESSION['nationality'])) { echo $_SESSION['nationality']; } unset($_SESSION['nationality']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Mobile No.</label>
                  <input
                    name="mobile_no"
                    type="text"
                    class="form-control"
                    placeholder="Mobile No."
                    required
                     value="<?php  if(isset($_SESSION['mobile_no'])) { echo $_SESSION['mobile_no']; } unset($_SESSION['mobile_no']) ?>"
                  />
                  <?php   if(isset($_SESSION['error_mobile']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_mobile']; unset($_SESSION['error_mobile']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">E-mail</label>
                
                 <input
                    type="email"]
                    name="email"
                    class="form-control"
                    placeholder="example@email.com"
                    required
                     value="<?php  if(isset($_SESSION['email'])) { echo $_SESSION['email']; } unset($_SESSION['email']) ?>"
                  />
                </div>
              </div>
              <h5>Permanent Address</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                   
                    type="text"
                    class="form-control"
                    name='per_zone'
                    id='per_zone'
                    placeholder="Province"
                    value="<?php  if(isset($_SESSION['per_zone'])) { echo $_SESSION['per_zone']; } unset($_SESSION['per_zone']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                 <input
                 
                    type="text"
                    class="form-control"
                    name="per_province"
                    id="per_province"
                    placeholder="Province"
                    value="<?php  if(isset($_SESSION['per_province'])) { echo $_SESSION['per_province']; } unset($_SESSION['per_province']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                 <input
                 
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="per_district"
                    id="per_district"
                     value="<?php  if(isset($_SESSION['per_district'])) { echo $_SESSION['per_district']; } unset($_SESSION['per_district']) ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                   <input
                
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    name="per_municipality"
                    id="per_municipality"
                    value="<?php  if(isset($_SESSION['per_municipality'])) { echo $_SESSION['per_municipality']; } unset($_SESSION['per_municipality']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                 <input
                  
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="per_wardno"
                    id="per_wardno"
                    value="<?php  if(isset($_SESSION['per_wardno'])) { echo $_SESSION['per_wardno']; } unset($_SESSION['per_wardno']) ?>"
                  />
                </div>
              </div>
              <br>
              <h5>Temporary Address</h5>
              <input
                      type="checkbox"
                      
                      class="check_as_permanent"
                      id="check_as_permanent"
                    /> same as permanent 
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                  
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="temp_zone"
                    id="temp_zone"
                     value="<?php  if(isset($_SESSION['temp_zone'])) { echo $_SESSION['temp_zone']; } unset($_SESSION['temp_zone']) ?>"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
              
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="temp_province"
                    id="temp_province"
                     value="<?php  if(isset($_SESSION['temp_province'])) { echo $_SESSION['temp_province']; } unset($_SESSION['temp_province']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  
                <input
                 
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="temp_district"
                    id="temp_district"
                     value="<?php  if(isset($_SESSION['temp_district'])) { echo $_SESSION['temp_district']; } unset($_SESSION['temp_district']) ?>" 
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input
                   
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    name="temp_municipality"
                    id="temp_municipality"
                     value="<?php  if(isset($_SESSION['temp_municipality'])) { echo $_SESSION['temp_municipality']; } unset($_SESSION['temp_municipality']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
     
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="temp_wardno"
                    id="temp_wardno"
                     value="<?php  if(isset($_SESSION['temp_wardno'])) { echo $_SESSION['temp_wardno']; } unset($_SESSION['temp_wardno']) ?>"
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
                    value="<?php  if(isset($_SESSION['father_name'])) { echo $_SESSION['father_name']; } unset($_SESSION['father_name']) ?>"
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
                    value="<?php  if(isset($_SESSION['father_contact'])) { echo $_SESSION['father_contact']; } unset($_SESSION['father_contact']) ?>"
                  />
                     <?php   if(isset($_SESSION['error_father_contact']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_father_contact']; unset($_SESSION['error_father_contact']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="father_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php  if(isset($_SESSION['father_occupation'])) { echo $_SESSION['father_occupation']; } unset($_SESSION['father_occupation']) ?>"
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
                    value="<?php  if(isset($_SESSION['mother_name'])) { echo $_SESSION['mother_name']; } unset($_SESSION['mother_name']) ?>"
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
                    value="<?php  if(isset($_SESSION['mother_contact'])) { echo $_SESSION['mother_contact']; } unset($_SESSION['mother_contact']) ?>"
                  />
                     <?php   if(isset($_SESSION['error_mother_contact']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_mother_contact']; unset($_SESSION['error_mother_contact']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="mother_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php  if(isset($_SESSION['mother_occupation'])) { echo $_SESSION['mother_occupation']; } unset($_SESSION['mother_occupation']) ?>"
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
                    value="<?php  if(isset($_SESSION['guardian_name'])) { echo $_SESSION['guardian_name']; } unset($_SESSION['guardian_name']) ?>"
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
                    value="<?php  if(isset($_SESSION['guardian_contact'])) { echo $_SESSION['guardian_contact']; } unset($_SESSION['guardian_contact']) ?>"
                  />
                     <?php   if(isset($_SESSION['error_guardian_contact']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_guardian_contact']; unset($_SESSION['error_guardian_contact']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="guardian_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php  if(isset($_SESSION['guardian_occupation'])) { echo $_SESSION['guardian_occupation']; } unset($_SESSION['guardian_occupation']) ?>"
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
                    value="<?php  if(isset($_SESSION['school_name'])) { echo $_SESSION['school_name']; } unset($_SESSION['school_name']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input
                     
                    name="school_passed_year"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                      value="<?php  if(isset($_SESSION['school_passed_year'])) { echo $_SESSION['school_passed_year']; } unset($_SESSION['school_passed_year']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">SLC/SEE GPA Point</label>
                  <input
                    name="school_gpa"
                    type="text"
                    class="form-control"
                    placeholder="Enter SEE GPA Point"
                    value="<?php  if(isset($_SESSION['school_gpa'])) { echo $_SESSION['school_gpa']; } unset($_SESSION['school_gpa']) ?>"
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
                    value="<?php  if(isset($_SESSION['school_english'])) { echo $_SESSION['school_english']; } unset($_SESSION['school_english']) ?>"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    name="school_science"
                    type="text"
                    class="form-control"
                    placeholder="Enter Science Marks"
                    value="<?php  if(isset($_SESSION['school_science'])) { echo $_SESSION['school_science']; } unset($_SESSION['school_science']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input
                    name="school_math"
                    type="text"
                    class="form-control"
                    placeholder="Enter math Marks"
                    value="<?php  if(isset($_SESSION['school_math'])) { echo $_SESSION['school_math']; } unset($_SESSION['school_math']) ?>"
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
                    value="<?php  if(isset($_SESSION['plus2_collage_name'])) { echo $_SESSION['plus2_collage_name']; } unset($_SESSION['plus2_collage_name']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                   <input
                     
                    name="plus2_passed_year"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                      value="<?php  if(isset($_SESSION['plus2_passed_year'])) { echo $_SESSION['plus2_passed_year']; } unset($_SESSION['plus2_passed_year']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">+2/PCL GPA Point</label>
                  <input
                    name="plus2_gpa"
                    type="text"
                    class="form-control"
                    placeholder="Enter +2/PCL GPA Point"
                    value="<?php  if(isset($_SESSION['plus2_gpa'])) { echo $_SESSION['plus2_gpa']; } unset($_SESSION['plus2_gpa']) ?>"
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
                    value="<?php  if(isset($_SESSION['plus2_english'])) { echo $_SESSION['plus2_english']; } unset($_SESSION['plus2_english']) ?>"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    name="plus2_science"
                    type="text"
                    class="form-control"
                    placeholder="Enter Science Marks"
                    value="<?php  if(isset($_SESSION['plus2_science'])) { echo $_SESSION['plus2_science']; } unset($_SESSION['plus2_science']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input
                    name="plus2_math"
                    type="text"
                    class="form-control"
                    placeholder="Enter math Marks"
                    value="<?php  if(isset($_SESSION['plus2_math'])) { echo $_SESSION['plus2_math']; } unset($_SESSION['plus2_math']) ?>"
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
                    value="<?php  if(isset($_SESSION['elective'])) { echo $_SESSION['elective']; } unset($_SESSION['elective']) ?>"
                  />
                </div>
                
              </div>

                <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">SELECT FACULTY YOU ARE APPLYING FOR</label>
              
                   <select name="faculty" class="form-control">
                    <option value="BBS">BBS</option>
                    <option value="B.ED">B.ED</option>
                    <option value="B.A">B.A</option>
                    
                  </select>
                </div>
                
              </div>
              <h5>Important Documents</h5>
               <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Gradesheet</label
                  >
                  <input type="file" class="form-control file-upload" name="slc_gradesheet" required />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <input type="file" class="form-control file-upload" name="slc_certificate" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >+2 Transcript Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" name="plus2_transcript" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >+2 Character Certificate</label
                  >
                  <input type="file" class="form-control file-upload" name="plus2_character" required />
                </div>
                
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Migration Certificate Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" name="migration" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Provisional Certificate Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" name="provision" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Citizenship Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" name="citizenship" required />
                </div>
                

                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  >
                  <input type="file" class="form-control file-upload" name="pp" required />
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-12">
                  <input
                      type="checkbox"
                      name="agreed"
                      class="agree-checkbox"
                      value="yes"
                      id='agreed'
                      
                    />
                  <p>
                    I, hereby, declare that the information provided in this
                    form is true to the best of my knowledge. I feel pleasure to
                    show my commitment in the following rules and regulations
                    strictly. If I violate the rules and regulations of the
                    school, I will accept any action against me.
                    <br>
                       <small id="term" style="color: red; font-style: italic; font-size:20px;">you must accept term and conditions to submit form</small>
                    <?php
                       if(isset($_SESSION['agreed']))
                       {
                           ?>
                           <div class="error">
                             
                             <small><?php echo $_SESSION['agreed']; unset($_SESSION['agreed']);  ?></small>
                           </div>

                      <?php }?>
                  </p>
                </div>
              </div>
              <div class="text-center">
              <input type="submit" class="btn btn-warning" id ="submit" name="college_form"></div>
              </form></div></div></div></div>
            

    <!-- javascripts -->
    <?php include"include/footer.php"; ?>
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

   <script>
   $(document).ready(function() {


           if (! $('#agreed').is(":checked"))
                     { 
                        $('#submit').attr('disabled','true');   
                    } 

                $("#agreed").click(function() { 
                    if (! $('#agreed').is(":checked"))
                     { 
                       $('#term').html("you must accept term and conditions to submit form");
                        $('#submit').attr('disabled','true');   
                     }
                     else 
                     {
                        $('#term').html("");
                       $('#submit').removeAttr('disabled','true');  
                     }
                }); 

     

        $('#check_computer_no').click(function() {


          $('#check_internet').attr("disabled","disabled");
          $('#check_internet1').attr("disabled","disabled");
 
         });

        $('#check_computer_yes').click(function() {


          $('#check_internet').removeAttr("disabled","disabled");
          $('#check_internet1').removeAttr("disabled","disabled");
 
        });


         $('#check_mobile_no').click(function() {


          $('#check_connectivity').attr("disabled","disabled");
          $('#check_connectivity1').attr("disabled","disabled");
 
         });

        $('#check_mobile_yes').click(function() {


          $('#check_connectivity').removeAttr("disabled","disabled");
          $('#check_connectivity1').removeAttr("disabled","disabled");
 
        });

          
  

        $('#check_as_permanent').change(function(){




              $('#temp_zone').val($('#per_zone').val());
              $('#temp_district').val($('#per_district').val());
              $('#temp_municipality').val($('#per_municipality').val());
              $('#temp_wardno').val($('#per_wardno').val());
              $('#temp_province').val($('#per_province').val());



        });
});



        

   </script>
  </body>
</html>
