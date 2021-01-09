  <?php
session_start();
include('include/connection.php');

include('include/check_login.php');

$id=$_GET['id'];
$faculty=$_GET['faculty'];



if($faculty=='management')
{
$sql="select * from admission where id='$id' limit 1";
$result=mysqli_query($db,$sql);
$admission=mysqli_fetch_assoc($result);
 $management='set';
}

elseif ($faculty=='engineering') 
{
 $sql="select * from engineeringadmission where id='$id' limit 1";
$result=mysqli_query($db,$sql);
$admission=mysqli_fetch_assoc($result);
$engineering='set';

}
 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/style.css" />
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

    <div class="area-to-print">
    <div class="title">
      <h4>Amission Form for XI XII</h4>

    </div>
    <div class="container">
      <div class="form-container">
        <div class="row">
          <div class="school-info col-lg-12 col-sm-12 col-md-12">
            
            <div class="form-title">
              <h4>Education for Enlightenment!</h4>
            </div>
          </div>
          <div class="admission-form col-lg-12 col-sm-12 col-md-12">
            <form action="insert.php" method="POST">
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">First Name</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    name="firstname"
                    value="<?php if(isset($management)){ echo htmlentities($admission['firstname']); }
                          if(isset($engineering)){ echo htmlentities($admission['sname']);}
                     ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Middle name"
                    name="middle name"
                    
                      value="<?php if(isset($management)){ echo htmlentities($admission['middlename']); }
                          if(isset($engineering)){ echo htmlentities($admission['mname']);}
                     ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    name="last name"
                     value="<?php if(isset($management)){ echo htmlentities($admission['lastname']); }
                          if(isset($engineering)){ echo htmlentities($admission['lname']);} ?>"                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Date of Birth</label>
                  <input disabled
                    id="dob"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                    name="DOB"
                    value="<?php echo htmlentities($admission['DOB']); ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-4">
                  <label for="gender">Gender: </label>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="exampleRadios1"
                      value="option1"
                      <?php if ($admission['gender']=="male")
                      {

                             echo"checked";
                      }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Male
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="exampleRadios2"
                      value="option2"
                       <?php if ($admission['gender']=="female")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Female
                    </label>
                  </div>
                </div>
                <?php  if(isset($management)) { ?>
                <div class="col-sm-8">
                  <label for="gender">Caste: </label>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="caste"
                      id="exampleRadios1"
                      value="dalit"
                     <?php if ($admission['caste']=="dalit")
                       {

                             echo"checked";
                        }
                        ?> 

                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Dalit
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="caste"
                      id="exampleRadios2"
                      value="janjati"
                         <?php if ($admission['caste']=="janjati")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Janajati
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="caste"
                      id="exampleRadios2"
                      value="brahmin"
                         <?php if ($admission['caste']=="brahmin")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Brahmin/Chhetri
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="caste"
                      id="exampleRadios2"
                      value="others"
                         <?php if ($admission['caste']=="others")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Others
                    </label>
                  </div>
                </div>
              <?php } ?>
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
                    value="<?php echo htmlentities($admission['mobilenumber']) ?>"
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
             <?php if(isset($management)) { ?>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Religion</label>
                  <input disabled
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Religion"
                    name="religion"
                    value="<?php echo htmlentities($admission['religion']) ?>"
                  />
                </div>
             
               
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Facebook Account</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Facebook Account"
                    name="facebook"
                    value="<?php echo htmlentities($admission['facebook']) ?>"
                  />
                </div>
              </div>

            <?php } ?>

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
                    value="<?php echo htmlentities($admission['zone']) ?>"
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
                    value="<?php echo htmlentities($admission['province']) ?>"
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
                    value="<?php echo htmlentities($admission['district']) ?>"
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
                    value="<?php echo htmlentities($admission['municipality']) ?>"
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
                    value="<?php echo htmlentities($admission['wardno']) ?>"
                  />
                </div>
              </div>
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
                    value="<?php echo htmlentities($admission['zone1']) ?>"
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
                    value="<?php echo htmlentities($admission['province1']) ?>"
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
                    value="<?php echo htmlentities($admission['district1']) ?>"
 
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
                    value="<?php echo htmlentities($admission['municipality1']) ?>"
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
                    value="<?php echo htmlentities($admission['wardno1']) ?>"
                  />
                </div>
              </div>
              <h5>Parent's / Guardian's Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Father's Name</label>
                  <input
                  disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Father's name"
                    name="pfirst"
                    value="<?php if(isset($management))
                               {echo htmlentities($admission['pfirst']);
                               } 
                               if(isset($engineering))
                               {echo htmlentities($admission['fname']);

                               }  ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="contact"
                    value="<?php echo htmlentities($admission['contact']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="occupation"
                    value="<?php echo htmlentities($admission['occupation']) ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mother's Name</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Mother's name"
                    name="mname"
                    value="<?php echo htmlentities($admission['mname']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="mcontact"
                    value="<?php echo htmlentities($admission['mcontact']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="occupation1"
                    value="<?php
                     if(isset($management))
                     {
                     echo htmlentities($admission['ocuupation1']);
                     }
                     if(isset($engineering))
                     {
                       echo htmlentities($admission['moccupation']);
                     }

                      ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Guardian's Name</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Guardian's name"
                    name="gname"
                    value="<?php echo htmlentities($admission['gname']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="gcontact"
                    value="<?php echo htmlentities($admission['gcontact']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="goccupation"
                    value="<?php echo htmlentities($admission['goccupation']) ?>"
                  />
                </div>
              </div>
              <h5>Academic Record</h5>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">School Name</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="School name"
                    name="sname"
                    value="<?php echo htmlentities($admission['sname']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Passed Year"
                    name="passed"
                    value="<?php echo htmlentities($admission['passed']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">SEE GPA Point</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="GPA Point"
                    name="GPA"
                    value="<?php echo htmlentities($admission['GPA']) ?>"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
                <?php if(isset($management))
                {?>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="firstName">Nepali</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Nepali"
                    name="nepali"
                    value="<?php echo htmlentities($admission['nepali']) ?>"
                  />
                </div>
              <?php }?>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="middleName">English</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="English"
                    name="english"
                    value="<?php if(isset($management)){echo htmlentities($admission['english']);}
                                 if(isset($engineering)){echo htmlentities($admission['English']);}
                      ?>"
                  />
                </div>
                <?php if(isset($management))
                {?>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="lastName">Social Std.</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Social Std."
                    name="social"
                    value="<?php echo htmlentities($admission['social']) ?>"
                  />
                </div>
              <?php }?>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="firstName">Science</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Science"
                    name="science"
                     value="<?php if(isset($management)){echo htmlentities($admission['science']);}
                                 if(isset($engineering)){echo htmlentities($admission['Science']);}
                      ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="middleName">Maths</label>
                  <input disabled type="text" class="form-control" placeholder="Maths" name="math" 
                     value="<?php if(isset($management)){echo htmlentities($admission['math']);}
                                 if(isset($engineering)){echo htmlentities($admission['Math']);}
                      ?>"

                  />
                </div>
                <?php if(isset($management))
                {?>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="lastName">EPH</label>
                  <input disabled type="text" class="form-control" placeholder="EPH" name="eph" value="<?php echo htmlentities($admission['eph']) ?>"/>
                </div>
                <?php  }
                ?>
              </div>

              <?php  if(isset($management)){ ?>
              <h5>ELECTIVE SUBJECTS XI</h5>
              <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="gender"><h4>Elective</h4></label><br>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="elective"
                      id="exampleRadios1"
                       value="business"
                      <?php if ($admission['elective']=="business")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Business Studies
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                         name="elective"
                      id="exampleRadios2"
                     value="hotel"
                      <?php if ($admission['elective']=="hotel")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Hotel Management 
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                        name="elective"
                      id="exampleRadios2"
                       value="computer"
                      <?php if ($admission['elective']=="computer")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Computer Science 
                    </label>
                  </div>
                </div>
                </div>
                <h5>ELECTIVE SUBJECTS XII</h5>
              <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="gender"><h4>Elective I</h4></label><br>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="elective2"
                      id="exampleRadios1"
                      value="business1"
                        <?php if ($admission['elective2']=="business1")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Business Studies
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                     name="elective2"
                      id="exampleRadios2"
                       value="hotel1"
                         <?php if ($admission['elective2']=="hotel1")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Hotel Management 
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                     name="elective2"
                      id="exampleRadios2"
                      value="computer1"
                        <?php if ($admission['elective2']=="computer1")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Computer Science 
                    </label>
                  </div>
                </div>
                </div>

                 <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="gender"><h4>Elective II</h4></label><br>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="elective3"
                     
                      id="exampleRadios1"
                       value="businessmath"
                            <?php if ($admission['elective3']=="businessmath")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Business Math
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="elective3"
                     
                      id="exampleRadios2"
                      value="marketing"
                          <?php if ($admission['elective3']=="marketing")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Marketing 
                    </label>
                  </div>
                </div>
                </div>
              <?php } ?>

              <?php if(isset($engineering)){ ?>
              <h5>Type of School</h5>
              <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="schooltype"
                      id="exampleRadios1"
                      value="government"
                      <?php
                        if($admission['schooltype']=='government')
                          echo "checked";

                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Government
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="schooltype"
                      id="exampleRadios2"
                      value="community"
                       <?php
                        if($admission['schooltype']=='community')
                          echo "checked";

                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Community
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input disabled
                      class="form-check-input"
                      type="radio"
                      name="schooltype"
                      id="exampleRadios2"
                      value="private"
                       <?php
                        if($admission['schooltype']=='private')
                          echo "checked";

                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Private 
                    </label>
                  </div>
                </div>
                </div>


               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">School Name</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="School name"
                    name="school1"
                    value="<?php echo htmlentities($admission['school1']); ?>" 
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="Passed Year"
                    name="passed1"
                    value="<?php echo htmlentities($admission['passed1']); ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">TSLC</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="GPA Point or %"
                    name="GPA1"
                    value="<?php echo htmlentities($admission['GPA1']); ?>"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">English</label>
                  <input disabled
                    type="text"
                    class="form-control"
                    placeholder="English"
                    name="english1"
                    value="<?php echo htmlentities($admission['english1']); ?>"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input disabled
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Science"
                    name="science1"
                    value="<?php echo htmlentities($admission['science1']); ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input disabled type="text" class="form-control" placeholder="Maths" name="math1" value="<?php echo htmlentities($admission['math1']); ?>"/>
                </div>
              </div>

              <?php } ?> 
              
              <h5>Important Documents</h5>
              <div class="form-row">
               
                 <?php 
                     if(isset($engineering))
                     {
                 ?>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >SEE/SLC Gradesheet</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=engineering&&type=slcgradesheet">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=engineering&&type=slccharacter">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Birth Certificate/Citizenship</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=engineering&&type=citizenship">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Entrance Admit Card</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=engineering&&type=admit_card">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Recommendation Letter from Entrance appearing School</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=engineering&&type=letter">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Result Copy</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=engineering&&type=result_copy">download  <i class="fa fa-download"></i> </a>
                   </div>

                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  ><br>
                  <a class="btn-secondary btn center" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=engineering&&type=pp">download  <i class="fa fa-download"></i> </a>
                   </div>

                <?php }?>

                <?php 
                     if(isset($management))
                     {
                 ?>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                    <label for="file" class="file-label"
                    >SEE/SLC Gradesheet</label
                  ><BR>
                  <a class="btn-secondary btn center file-upload" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=management&&type=slcgradesheet">download  <i class="fa fa-download"></i> </a>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <BR>  
                  <a class="btn-secondary btn center file-upload" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=management&&type=slccharacter">download  <i class="fa fa-download"></i> </a>
                </div>
              
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  ><br>
                  <a class="btn-secondary btn center file-upload" href="download.php?id=<?php echo $admission['id'] ?>&&faculty=management&&type=pp">download  <i class="fa fa-download"></i> </a>
                </div>
              
              
                <?php }?>
               
            
               
              </div>
         
            
            </form>
          </div>
        </div>
      </div>
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
  </body>
</html>
