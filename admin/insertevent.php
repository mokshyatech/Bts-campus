<?php
   session_start();

  include('include/connection.php');
  


   if(isset($_POST['insert_event']))
   {
       $event=$_POST['event'];
      $date=$_POST['date'];
      $date=date("Y-m-d");


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



      $sql="insert into calender (event,date,school,plus2,engineering,created_at) values('$event','$date',$school,$plus2,$engineering,'$date') ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Calender Event has been successfully posted';
         header('location:event_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
                 header('location:event_table.php');
     

      }
    
   }

   if(isset($_POST['update_event']))
   {
       $id=$_POST['id'];
       $event=$_POST['event'];
      $date=$_POST['date'];


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



      $sql="UPDATE calender  SET event='$event',date='$date',school='$school',plus2='$plus2',engineering='$engineering' WHERE id='$id' ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']=' Calender Event has been successfully updated';
          
        header('location:event_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in Calender Event';
              header('location:event_table.php');
     

      }
   }



?>