
<?php 
 if(isset($_GET['subject']))
 {
  $subject=$_GET['subject'];
 }
 if(isset($_GET['faculty']))
 {
  $faculty=$_GET['faculty'];
 }
 if(isset($_GET['id']))
 {
 	$id=$_GET['id'];
 }
 if(isset($_GET['page']))
 {
 	$page=$_GET['page'];
 }
 else
 {
 	$page=1;
 }
  $url="../resources.php?faculty=".$faculty."&&subject=".$subject."&&page=".$page;
 ?>

<a href="<?php echo $url; ?>">&#8592;BACK</a>
      <?php 
      include"connection.php";
$id = $_GET['id'];
      $query = "SELECT id, pdf FROM resources WHERE id= '$id'";
$result = $db->query($query);
while ($row = $result->fetch_object()) {
  $pdf = $row->pdf;
  $target_path = "../teacher/pdf/";
  # code...
}

?>
<br>

<iframe src="<?php echo $target_path.$pdf; ?>" width = "100%" height = "800px";></iframe>
  