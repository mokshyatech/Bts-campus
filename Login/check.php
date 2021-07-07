
<?php  
include '../include/connection.php';
session_start();
    if(isset($_POST['student'])) {  
    
       $count=0;

        $uniquecode=$_POST['uniquecode'];
        $password=$_POST['password'];
    

      $result = mysqli_query($db, "SELECT * FROM student WHERE  uniquecode = '$uniquecode' and password = '$password'");
      $row= mysqli_fetch_assoc($result);
      $count=mysqli_num_rows($result);

      if($count==0)
      {
         
          $_SESSION['error'] ="your credential didnot match";
          $_SESSION['uniquecode']=$_POST['uniquecode'];
          $_SESSION['password']=$_POST['password'];
           header("location:login.php");

        
         
      }
      else
      {
     
        $_SESSION['login_user'] = $row['firstname'];
        $_SESSION['login_as_student'] = true;
        $_SESSION['code']=$row['uniquecode'];
        $_SESSION['payment']=$row['payment'];
        $_SESSION['stu_id']=$row['id'];
        $_SESSION['login_time']=time();
        
        
       
        header('Location: ../index.php');
        
      }
    }


 if(isset($_POST['teacher'])) {  
    
       $count=0;

        
       $email=$_POST['email'];
       $password=$_POST['password'];

      $result = mysqli_query($db, "SELECT * FROM teacher WHERE  email = '$email' and password = '$password'");
      $row= mysqli_fetch_assoc($result);
      $count=mysqli_num_rows($result);

      if($count==0)
      {
        
              
        $_SESSION['error'] ="your credential didnot match";
         $_SESSION['email']=$_POST['email'];
         $_SESSION['password']=$_POST['password'];
          header("location:login.php?user=teacher");
  
              
      
      }
      else
      {
        
        $_SESSION['teacher'] = $row['firstname'];
        $_SESSION['teacher_id'] = $row['id'];
        $_SESSION['login_as_teacher'] = true;
          $_SESSION['login_time']=time();

        header('Location: ../teacher/index.php');
        
      }
    }

?>
  
  
