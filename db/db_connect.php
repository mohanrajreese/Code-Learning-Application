<?php 	

//session_start();

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "cla";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>