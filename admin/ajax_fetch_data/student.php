<?php 
include '../include/connection.php';
$search=$_GET['search'];
if($search=='')
{
  $sql="select * from student where uniquecode LIKE '%$search%' or firstname LIKE '%$search%' or lastname LIKE '%$search%' or faculty LIKE '%$search%' order by firstname asc limit 20 ";   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
      
  }
}
else
{
$sql="select * from student where uniquecode LIKE '%$search%' or firstname LIKE '%$search%' or lastname LIKE '%$search%' or faculty LIKE '%$search%' or CONCAT(firstname, ' ', lastname)  LIKE '%$search%' order by firstname asc ";  
 $result=mysqli_query($db,$sql);
   $fetch_result=array();
 
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
      
  }
}
 echo json_encode($fetch_result);


