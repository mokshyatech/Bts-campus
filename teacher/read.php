
<a href="mypost.php">&#8592;BACK</a>
      <?php 
      include"../include/connection.php";
$id = $_GET['id'];
      $query = "SELECT id, pdf ,image FROM resources WHERE id= '$id'";
$result = $db->query($query);
while ($row = $result->fetch_object()) {
  $pdf = $row->pdf;
 ;
  $target_path = "pdf/";
  # code...
}

?>
<br>

<!-- <img src="<?php echo $target_path.$pfd; ?>" width = "100%" height = "800px";></img> -->
  <iframe src="<?php echo $target_path.$pdf; ?>" width = "100%" height = "800px";></iframe>
  