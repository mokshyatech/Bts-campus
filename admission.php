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
      <link rel="stylesheet" href="frontpage/css/style.css" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>

    <title>Admission </title>

    <!-- title icon -->
    <link rel="shortcut icon" href="#" />
  </head>
  <body>
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
                    <li>C. Nepali</li>
                    <li>Accountancy</li>
                    <li>Economics</li>
                  </ul>

                  <h5>Choose Any One</h5>

                  <ul class="card-list">
                    <li>Business Studies</li>
                    <li>Hotel Management</li>
                    <li>Computer Science</li>
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
                    <li>Accountancy</li>
                    <li>Economics</li>
                  </ul>

                  <h5>Choose Any One</h5>

                  <ul class="card-list">
                    <li>Hotel Management</li>
                    <li>Computer Science</li>
                    <li>Business Maths</li>
                    <li>Marketing</li>
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
                    <li>Accountancy</li>
                    <li>Economics</li>
                  </ul>

                  <h5>Choose Any One</h5>

                  <ul class="card-list">
                    <li>Hotel Management</li>
                    <li>Computer Science</li>
                    <li>Business Maths</li>
                    <li>Marketing</li>
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
            <form action="#" method="POST">
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">First Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="First name"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Middle name"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Date of Birth</label>
                  <input
                    id="dob"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
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
                      name="exampleRadios"
                      id="exampleRadios1"
                      value="option1"
                      checked
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Male
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios"
                      id="exampleRadios2"
                      value="option2"
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
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Mobile No."
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Mobile No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="example@email.com"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">E-mail</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Facebook Account"
                  />
                </div>
              </div>
              <h5>Permanent Address</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                  />
                </div>
              </div>
              <h5>Temporary Address</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                  />
                </div>
              </div>
              <h5>Parent's / Guardian's Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Father's Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Father's name"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mother's Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Mother's name"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Guardian's Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Guardian's name"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                  />
                </div>
              </div>
              <h5>Academic Record</h5>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">School Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="School name"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Passed Year"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">SLC/SEE GPA Point</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="GPA Point"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">English</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="English"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Science"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input type="text" class="form-control" placeholder="Maths" />
                </div>

              </div>
               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">School Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="School name"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Passed Year"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">+2/PCL GPA Point</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="GPA Point"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">English</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="English"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Science"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input type="text" class="form-control" placeholder="Maths" />
                </div>
              </div>

              <h6>ELECTIVE SUBJECT </h6>
              <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">ELECTIVE I</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="English"
                  />
                </div>
                
              </div>
              <h5>Important Documents</h5>
               <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Gradesheet</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >+2 Transcript Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >+2 Character Certificate</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Migration Certificate Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Provisional Certificate Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Citizenship Photocopy</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  >
                  <input type="file" class="form-control file-upload" />
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-12">
                  <p>
                    I, hereby, declare that the information provided in this
                    form is true to the best of my knowledge. I feel pleasure to
                    show my commitment in the following rules and regulations
                    strictly. If I violate the rules and regulations of the
                    school, I will accept any action against me.
                    <input
                      type="checkbox"
                      name="agreed"
                      class="agree-checkbox"
                    />
                  </p>
                </div>
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-warning">Submit</button>
              </div>
            </form>
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
