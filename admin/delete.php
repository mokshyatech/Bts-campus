<?php
session_start();
include('include/connection.php');
include('include/check_login.php');
       
        $id=$_GET['id'];
       
       $type=$_GET['type'];


       if($type=='notice')
      {

      $sql="select *from notice where id='$id' LIMIT 1";
                      $query=mysqli_query($db,$sql);
                       $result=mysqli_fetch_assoc($query);
                       if(!empty($result)){ 

                        if($result['image']!="" && $result!=null){

                          if(file_exists('notice_file/'.$result['image'])){
                             
                              unlink('notice_file/'.$result['image']);
                            
                           }
                        }
                      }

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
        $sql="select *from news_and_event where id='$id' LIMIT 1";
                      $query=mysqli_query($db,$sql);
                       $result=mysqli_fetch_assoc($query);
                       if(!empty($result)){ 

                        if($result['image']!="" && $result!=null){

                          if(file_exists('news_and_announcement_file/'.$result['image'])){
                             
                              unlink('news_and_announcement_file/'.$result['image']);
                            
                           }
                        }
                      }

          $sql=" DELETE FROM news_and_event  WHERE id=$id ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully deleted';
          
        header('location:news-and-events-table.php');
     
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



  
    else if($type=='gallery_delete')
    {
        $id=$_GET['id'];
        $sql="select *from photos where id='$id' limit 1";
        $res=mysqli_query($db,$sql);
        $result=mysqli_fetch_assoc($res);
      
        if(file_exists('photo/'.$result['photo']))
        {
          unlink('photo/'.$result['photo']);
        }

        $delete="DELETE FROM photos  where id='$id'";
        $delete_success=mysqli_query($db,$delete);
         $_SESSION['success']=" image has been successfully deleted";
           header('location:gallery_table.php');
           exit();

    }
    /*-----------------------------------------------------------------------------------------------------------------------------
                                            teacher deletes
    -------------------------------------------------------------------------------------------------------------------------------
    */

else if($type=='teacher_deletes')
{
     

   $sql=" DELETE FROM teacher  WHERE id='$id' ";
           if(mysqli_query($db,$sql))
      {
        $_SESSION['success']="One Collage Teacher  has been successfully deleted";
          
        header('location:teacher_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
              header('location:teacher_table.php');
              
        }

}
    /*-----------------------------------------------------------------------------------------------------------------------------
                                            student deletes
    -------------------------------------------------------------------------------------------------------------------------------
    */
       else if($type=='student')
       {
         
          $sql=" DELETE FROM student  WHERE id='$id' ";
           if(mysqli_query($db,$sql))
        {
        $_SESSION['success']="One student has been successfully deleted";
          
        header('location:student_table.php');
       
        }
      else
         {
        $_SESSION['error']='!Opps somthing wrong in deleting student';
              header('location:student_table.php');
              
     

         }

       }
      


      /*-----------------------------------------------------------------------------------------------------------------------------
                                            admission form deletes
    -------------------------------------------------------------------------------------------------------------------------------
    */


     else if($type=='admission')
       {
         $sql="select *from admissions where id='$id' limit 1";
         $result=mysqli_fetch_assoc(mysqli_query($db,$sql));
          
          if(file_exists("../file/".$result['slc_certificate']))
          {
            unlink("../file/".$result['slc_certificate']);
          }
           if(file_exists("../file/".$result['slc_gradesheet']))
          {
            unlink("../file/".$result['slc_gradesheet']);
          }
           if(file_exists("../file/".$result['plus2_transcript']))
          {
            unlink("../file/".$result['plus2_transcript']);
          }
           if(file_exists("../file/".$result['plus2_character']))
          {
            unlink("../file/".$result['plus2_character']);
          }
           if(file_exists("../file/".$result['migration']))
          {
            unlink("../file/".$result['migration']);
          }
           if(file_exists("../file/".$result['provision']))
          {
            unlink("../file/".$result['provision']);
          }
           if(file_exists("../file/".$result['citizenship']))
          {
            unlink("../file/".$result['citizenship']);
          }
           if(file_exists("../file/".$result['pp']))
          {
            unlink("../file/".$result['pp']);
          }

          

         $sql=" DELETE FROM admissions  WHERE id='$id' ";
      if(mysqli_query($db,$sql))
             {
               $_SESSION['success']="Admission form has been deleted successfully";        
                header('location:admission_table.php');
       
             }
       else
          {
              $_SESSION['error']='!Opps somthing wrong in deleting student';
              header('location:admission_table.php');
          }

       }



/* ------------------------------------------------------------------------------------------------------+
                          user       message
-------------------------------------------------------------------------------------------------------*/

   else if($type=='userMessage')
   {

     

         $sql=" DELETE FROM user_message  WHERE id='$id' ";
      if(mysqli_query($db,$sql))
             {
               $_SESSION['success']="User message has been deleted successfully!!";        
                header('location:message.php');
       
             }
       else
          {
              $_SESSION['error']='!Opps somthing wrong in deleting message';
              header('location:message.php');
          }

   }




?>