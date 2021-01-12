<?php
session_start();
include('include/connection.php');

include('include/check_login.php');

  $id=$_GET['id'];
  $type=$_GET['type'];
  $sql="select * from admissions where id='$id' limit 1";
    $result=mysqli_query($db,$sql);
    $admission=mysqli_fetch_assoc($result);
  
    $file=$admission['slc_gradesheet'];
    $file1=$admission['slc_certificate'];
    $file2=$admission['plus2_transcript'];
    $file3= $admission['plus2_character'];
    $file4= $admission['migration'];
    $file5=$admission['provision'];
    $file6 = $admission['citizenship'];
    $file7= $admission['pp'];

      $path='../file/'.$file;
      $path1='../file/'.$file1;
      $path2='../file/'.$file2;
      $path3='../file/'.$file3;
      $path4='../file/'.$file4;
      $path5='../file/'.$file5;
      $path6='../file/'.$file6;
      $path7='../file/'.$file7;
   
     


    if($type=='slcgradesheet')
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

    if($type=='slccharacter')
   {
    if(!empty($file1) && file_exists($path1))
    {
    
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file1");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path1);
    }
   }

   if($type=='plus2_transcript')

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

    if($type=='plus2_character')

   {
    if(!empty($file3) && file_exists($path3))
    {
      
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file3");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path3);
    }
   }
    
   if($type=='migration')

   {
    if(!empty($file4) && file_exists($path4))
    {
      
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file4");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path4);
    }
   }
    

if($type=='provisional')

   {
    if(!empty($file5) && file_exists($path5))
    {
      
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file5");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path5);
    }
   }

if($type=='citizenship')

   {
    if(!empty($file6) && file_exists($path6))
    {
      
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file6");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path6);
    }
   }
if($type=='pp')

   {
    if(!empty($file7) && file_exists($path7))
    {
      
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file7");
      header("Content-Type:application/zip");
      header("Content-Transfer-Emcoding:binary");
      readfile($path7);
    }
   }

  

  

  echo "Woops!!! Something went wrong file uploaded by student is corrupted";
?>








