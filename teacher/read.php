
<a href="resource.php">&#8592;BACK</a>
      <?php 
      include"../include/connection.php";
$id = $_GET['id'];
      $query = "SELECT id, pdf ,image FROM resources WHERE id= '$id'";
$result = $db->query($query);
while ($row = $result->fetch_object()) {
  $pdf = $row->pdf;
  $image = $row->image;
  $target_path = "photo/";
  # code...
}

?>
<br>

<img src="<?php echo $target_path.$image; ?>" width = "100%" height = "800px";></img>
  