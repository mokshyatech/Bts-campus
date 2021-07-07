
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/log.css.css">
	<link rel="shortcut icon" href="../frontpage/images/logo1.jpg" />
</head>
<body>
	<?php
	session_start();     
	include('include/connection.php');
	
	if(isset($_SESSION['admin_login']))
	{
		header("location:landing.php");
	}
	
	if(isset($_POST['submit'])){
		$name=$_POST['username'];
		$password=$_POST['password'];
		$query="select * from admin_user where username='$name'and password='$password' ";
		$data=mysqli_query($db,$query);
		$total=mysqli_num_rows($data);
		console.log($total);

		if($total==1)
		{
			$_SESSION['username']=$name;
			$_SESSION['admin_login']=true;
			$_SESSION['admin_login_time']=time();
			header("location:landing.php");
		}
		
						

			?>
			<div class="alert alert-danger">
			<p style="text-align: center;">log in failed</p>
			</div></body><?php
		}
	


	?>

	<form method="post" action="">
    <div class="container ">
      <div class="title"><h4>Admin Panel</h4></div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="username" class="form-control" placeholder="Username" id="inputEmail3" name="username">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="password" id="inputPassword3" name="password">
    </div>
   
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10" style="text-align: center;">
      <button type="submit" class="btn btn-success" name="submit">log in</button>
    </div>
  </div>
  </div>
</form>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<?php include "../include/expireMessage.php"; ?>
</body>
</html>