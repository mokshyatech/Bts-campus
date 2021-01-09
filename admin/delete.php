<?php
session_start();
include('include/connection.php');
include('include/check_login.php');
       
        $id=$_GET['id'];
       
       $type=$_GET['type'];


       if($type=='notice')
      {
           $sql=" DELETE FROM notice  WHERE id=$id ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Notice has been successfully deleted';
          
        header('location:notice_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting event and news';
              header('location:notice_table.php');
     

      }

       }

       else if($type=='news_and_event')
       {
          $sql=" DELETE FROM news_and_event  WHERE id=$id ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully deleted';
          
        header('location:news and events_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting event and news';
              header('location:news and events_table.php');

     

      }

       }


       else if($type=='calender')
       {
          $sql=" DELETE FROM calender  WHERE id=$id ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='calender Event has been successfully deleted';
          
        header('location:event_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting calender Event';
              header('location:event_table.php');
              
     

      }

       }

       else if($type=='school_student')
       {
          $sql=" DELETE FROM school  WHERE uniquecode='$id' ";

       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='student record  has been successfully deleted';
          
        header('location:school_stu_registration_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
            header('location:school_stu_registration_table.php');
              
     

      }

       }

      else if($type=='school_teacher')
      {    
           $sql=" DELETE FROM school_teacher  WHERE email='$id' ";
           if(mysqli_query($db,$sql))
      {
        $_SESSION['success']="Teacher ".$name." record  has been successfully deleted";
          
        header('location:school_teacher_registration_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
            header('location:school_teacher_registration_table.php');
              
     

      }
    }

    else if($type=='engineering_student')
    {
     
         $sql=" DELETE FROM engineering  WHERE uniquecode='$id' ";
           if(mysqli_query($db,$sql))
      {
        $_SESSION['success']="Student with ".$id." record  has been successfully deleted";
          
        header('location:engineering_student_registration_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
              header('location:engineering_student_registration_table.php');
              
     

      }


    }

    else if($type=='engineering_teacher')
    {
     
         $sql=" DELETE FROM engineering_teacher  WHERE email='$id' ";
           if(mysqli_query($db,$sql))
      {
        $_SESSION['success']="Teacher with ".$id." record  has been successfully deleted";
          
        header('location:engineering_teacher_registration_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
              header('location:engineering_teacher_registration_table.php');
              
     

      }


    }

    else if($type=='collage_teacher')
    {
       $sql=" DELETE FROM college_teacher  WHERE id='$id' ";
           if(mysqli_query($db,$sql))
      {
        $_SESSION['success']="One Collage Teacher  has been successfully deleted";
          
        header('location:collage_teacher_registration_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
              header('location:collage_teacher_registration_table.php');
              
     

      }

    }

    else if($type=='collage_student')
    {
      $sql=" DELETE FROM college  WHERE id='$id' ";
           if(mysqli_query($db,$sql))
      {
        $_SESSION['success']=" One Collage Student  has been successfully deleted";
          
        header('location:collage_student_registration_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
              header('location:collage_student_registration_table.php');
              
     

      }
       

    }

       

?>