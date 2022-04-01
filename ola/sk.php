<?php  
   $status = "ERROR";
   if ((isset($_POST['name'])) && (isset($_POST['thema'])) && (isset($_POST['per']) )){
	   if (($_POST['name']!='') && ($_POST['thema']!='') && ($_POST['per']!='')){
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_notice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO notice (user, subject, Description)
VALUES ('".$_POST['name']."', '".$_POST['thema']."', '".$_POST['per']."')";

if ($conn->query($sql) === TRUE) {
	$status = "OK";
} else {
	$status = "ERROR";
}

$conn->close();
		}
	}
	header('Content-type: application/json');
	echo json_encode(array('status' => $status)); // where $status is 'OK' or 'ERROR'	 	
?>         		         