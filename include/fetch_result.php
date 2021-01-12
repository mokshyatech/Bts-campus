<?php 

  include("connection.php");

$faculty=$_GET['faculty'];
$code=$_GET['uniquecode'];
$term=$_GET['term'];



$fetch_result=array();
  $sql = "SELECT * FROM results where uniquecode='$code' AND faculty='$faculty' AND term='$term'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $i=0; 
  while($row = $result->fetch_assoc()) {
  	  $fetch_result[$i]['uniquecode']=$row['uniquecode'];
  	  $fetch_result[$i]['faculty']=$row['faculty'];
  	  $fetch_result[$i]['id']=$row['id'];
  	  $fetch_result[$i]['term']=$row['term'];
  	  $fetch_result[$i]['subject']=$row['subject'];
  	  $fetch_result[$i]['marks']=$row['marks'];
      $fetch_result[$i]['full_marks']=$row['full_marks'];
      $fetch_result[$i]['pass_marks']=$row['pass_marks'];
        $i++;
     
  }
}

 echo json_encode($fetch_result);


?>