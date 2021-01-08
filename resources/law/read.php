
<a href="law.php">&#8592;BACK</a>
      <?php 
      include"../../connection.php";
$id = $_GET['id'];
      $query = "SELECT id, pdf FROM school_resource WHERE id= '$id'";
$result = $db->query($query);
while ($row = $result->fetch_object()) {
  $pdf = $row->pdf;
  $target_path = "../../../school/teacher/pdf/";
  # code...
}

?>
<br>

<iframe src="<?php echo $target_path.$pdf; ?>" width = "100%" height = "800px";"></iframe>
  