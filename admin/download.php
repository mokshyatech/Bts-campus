<?php
session_start();
include('include/connection.php');

include('include/check_login.php');

  $id=$_GET['id'];
  $faculty=$_GET['faculty'];
  $type=$_GET['type'];

  if($faculty=='school')

  {
      $sql="select * from admission where id='$id' limit 1";
    $result=mysqli_query($db,$sql);
    $admission=mysqli_fetch_assoc($result);
  
    $file=$admission['prev_class_gradesheet'];
    $file2=$admission['birth_certificate'];
    $file3=$admission['pp'];
      $path='../admission/file/'.$file;
      $path2='../admission/file/'.$file2;
      $path3='../admission/file/'.$file3;
      if($type=='gradesheet')
     {
           if(!empty($file) && file_exists($path))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path);
       }
     }        

       if($type=='birth_certificate')
     {
           if(!empty($file2) && file_exists($path2))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file2");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
        readfile($path2);
       }
     }        


      if($type=='pp')
     {
           if(!empty($file3) && file_exists($path3))
       {
      
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file3");
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");
     }        
          

  }
}

  echo "Woops!!! Something went wrong file uploaded by student is currupted";
?>