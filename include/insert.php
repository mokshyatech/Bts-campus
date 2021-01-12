<?php

 session_start();



  include('connection.php');



  if(isset($_POST['college_form']))
  { 
         $f_name=$_POST['f_name'];
         $m_name=$_POST['m_name'];
         $l_name=$_POST['l_name'];
         $dob=$_POST['dob'];
         $gender=$_POST['gender'];
         $nationality=$_POST['nationality'];
         $mobile_no=$_POST['mobile_no'];
         $email=$_POST['email'];
         

         

         // permanenet address part

         
         $per_zone=$_POST['per_zone'];
         $per_province=$_POST['per_province'];
         $per_district=$_POST['per_district'];
         $per_municipality=$_POST['per_municipality'];
         $per_wardno=$_POST['per_wardno'];

         //temporarty part



        $temp_zone=$_POST['temp_zone'];
         $temp_province=$_POST['temp_province'];
         $temp_district=$_POST['temp_district'];
         $temp_municipality=$_POST['temp_municipality'];
         $temp_wardno=$_POST['temp_wardno'];
         //parents and gurdian

         $father_name=$_POST['father_name'];
         $father_contact=$_POST['father_contact'];
         $father_occupation=$_POST['father_occupation'];

         $mother_name=$_POST['mother_name'];
         $mother_contact=$_POST['mother_contact'];
         $mother_occupation=$_POST['mother_occupation'];

         $guardian_name=$_POST['guardian_name'];
         $guardian_contact=$_POST['guardian_contact'];
         $guardian_occupation=$_POST['guardian_occupation'];

         


         // acadamic record

         $school_name=$_POST['school_name'];
         $school_passed_year=$_POST['school_passed_year'];
         $school_gpa=$_POST['school_gpa'];
         $school_english=$_POST['school_english'];
         $school_math=$_POST['school_math'];
         $school_science=$_POST['school_science'];
         $plus2_collage_name= $_POST['plus2_collage_name'];
         $plus2_passed_year =$_POST['plus2_passed_year'];
         $plus2_gpa=$_POST['plus2_gpa'];
         $plus2_english= $_POST['plus2_english'];
         $plus2_science=$_POST['plus2_science'];
         $plus2_math=$_POST['plus2_math'];
         $elective= $_POST['elective'];

         $slc_gradesheet=$_FILES['slc_gradesheet']['name'];
         $slc_certificate =$_FILES['slc_certificate']['name'];
         $plus2_transcript=$_FILES['plus2_transcript']['name'];
         $plus2_character= $_FILES['plus2_character']['name'];
         $migration=$_FILES['migration']['name'];
         $provision =$_FILES['provision']['name'];
         $citizenship= $_FILES['citizenship']['name'];
         $pp= $_FILES['pp']['name'];

         include('old_data.php');
         include('validate.php');
         
        


        $name=$_FILES['slc_gradesheet']['name'];
        $slc_gradesheet=time().$name;
        $temp=$_FILES['slc_gradesheet']['tmp_name'];
        $dir="../file/".$slc_gradesheet;
        move_uploaded_file($temp, $dir);


        $name=$_FILES['slc_certificate']['name'];
         $slc_certificate=time().$name;
        $temp=$_FILES['slc_certificate']['tmp_name'];
        $dir="../file/".$slc_certificate;
        move_uploaded_file($temp, $dir);

        $name=$_FILES['plus2_character']['name'];
         $plus2_character=time().$name;
        $temp=$_FILES['plus2_character']['tmp_name'];
        $dir="../file/".$plus2_character;
        move_uploaded_file($temp, $dir);

        $name=$_FILES['plus2_transcript']['name'];
         $plus2_transcript=time().$name;
        $temp=$_FILES['plus2_transcript']['tmp_name'];
        $dir="../file/".$plus2_transcript;
        move_uploaded_file($temp, $dir);

        $name=$_FILES['migration']['name'];
         $migration=time().$name;
        $temp=$_FILES['migration']['tmp_name'];
        $dir="../file/".$migration;
        move_uploaded_file($temp, $dir);

        $name=$_FILES['provision']['name'];
         $provision=time().$name;
        $temp=$_FILES['provision']['tmp_name'];
        $dir="../file/".$provision;
        move_uploaded_file($temp, $dir);

        $name=$_FILES['citizenship']['name'];
        $citizenship=time().$name;
        $temp=$_FILES['citizenship']['tmp_name'];
        $dir="../file/".$citizenship;
        move_uploaded_file($temp, $dir);

        $name=$_FILES['pp']['name'];
        $pp=time().$name;
        $temp=$_FILES['pp']['tmp_name'];
        $dir="../file/".$pp;
        move_uploaded_file($temp, $dir);

       
        $sql=" insert into admissions
               (f_name,m_name,l_name,dob,gender,nationality,mobile_no,email,per_zone,per_province,per_district,per_municipality,per_wardno,temp_zone,temp_province, temp_district,temp_municipality,temp_wardno,father_name,father_contact,father_occupation,mother_name,mother_contact,mother_occupation,guardian_name,guardian_contact,guardian_occupation,school_name,school_passed_year,school_gpa,school_english,school_science,school_math,plus2_collage_name, plus2_passed_year,plus2_gpa,plus2_english,plus2_science,plus2_math,elective,slc_certificate,slc_gradesheet,plus2_transcript,plus2_character,migration,provision,citizenship,pp)
              values('$f_name','$m_name','$l_name','$dob','$gender','$nationality','$mobile_no','$email','$per_zone','$per_province','$per_district','$per_municipality','$per_wardno','$temp_zone','$temp_province','$temp_district','$temp_municipality','$temp_wardno','$father_name','$father_contact','$father_occupation','$mother_name','$mother_contact','$mother_occupation','$guardian_name','$guardian_contact','$guardian_occupation','$school_name','$school_passed_year','$school_gpa','$school_english',
                '$school_science',
                '$school_math',
                '$plus2_collage_name',
                '$plus2_passed_year',
                '$plus2_gpa',
                'plus2_english',
                '$plus2_science',
                '$plus2_math',
                '$elective',
                '$slc_certificate',
                '$slc_gradesheet',
                '$plus2_transcript',
                '$plus2_character',
                '$migration',
                '$provision',
                '$citizenship','$pp')";

      if(mysqli_query($db,$sql))
      {
       $_SESSION['admission_success']='set';
          
          include('reset_old_data.php');
        header('location:../index.php');
        exit();
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in wrong plz check data again';
        header('location:../index.php');
        exit();
              
     

      }





         // echo $f_name,$m_name,$l_name,$dob,$gender,$caste,$nationality,$religion,$mobile_no,$email,$facebook_account."<br>computer=>".$check_computer."<br>connection=>".$check_connection."<br>mobile=>".$check_mobile."<br>connectivity=>".$check_connectivity."<br>tv=>".$check_tv."<br>cable=>".$check_cable."<br>radio=>".$check_radio."<br><br>temp_zone=>".$temp_zone."<br>per_zone=>".$per_zone."<br>temp_province=>".$temp_province."<br>per_province=>".$per_province."<br>temp_district=>".$temp_district."<br>per_district=>".$per_district."<br>temp_municipality=>".$temp_municipality."<br>per_municipality=>".$per_municipality."<br>temp_wardno=>".$temp_wardno."<br>per_wardno=>".$per_wardno."<br>parents and gurdians <br>father_name=>".$father_name."<br>father_contact=>".$father_contact."<br>father_occupation=>".$father_occupation."<br><br>mother_name=>".$mother_name."<br>mother_contact=>".$mother_contact."<br>mother_occupation=>".$mother_occupation."<br><br>guardian_name=>".$guardian_name."<br>guardian_contact=>".$guardian_contact."<br>guardian_occupation=>".$guardian_occupation."<br><br>Details of brother and sister<br<br>bro_sis_name1=>".$bro_sis_name1."<br>bro_sis_name2=>".$bro_sis_name2."<br>bro_sis_name3=>".$bro_sis_name3."<br>bro_sis_class1=>".$bro_sis_class1."<br>bro_sis_class2=>".$bro_sis_class2."<br>bro_sis_class3=>".$bro_sis_class3."<br><br>"."<br>prev_school_details=>".$prev_school_details."<br>health_issues=>".$health_issues."<br><br>"."<br>prev prev_class_gradesheet=>".$prev_class_gradesheet."<br>birth_certificate=>".$birth_certificate."<br>pp=>".$pp;
        
    

  }
  



?>