<?php
   session_start();

  include('include/connection.php');
   if(isset($_POST['notice_insert']))
   {

     
     $date=date("Y-m-d");

      $notice=$_POST['notice'];
        if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
        if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
        if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }



      $sql="insert into notice (notice,school,plus2,engineering,created_at) values('$notice',$school,$plus2,$engineering,'$date') ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Notice has been successfully posted';
          
        header('location:notice_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
             header('location:notice_table.php');
     

      }
      


   }


    if(isset($_POST['notice_update']))
   {
     $id=$_POST['id'];
      $notice=$_POST['notice'];
        if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
        if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
        if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }



      $sql="UPDATE notice  SET notice='$notice',school='$school',plus2='$plus2',engineering='$engineering' where id='$id' ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='notices has been updated successfully';
          
        header('location:notice_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in updating in notice';
              header('location:notice_table.php');
     

      }
      


   }



?>