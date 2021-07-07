<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bnkswgip_campus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$db = mysqli_connect($servername, $username, $password, $dbname );  


class database{
	public $con;
    public  $servername="localhost";
    public $username="root";
    public $password="";
    public  $database="bnkswgip_campus";	
	public function  __construct(){
		$this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }

	}
}
   

?>