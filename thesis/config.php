<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "rsvp";

$conn  = mysqli_connect ($servername,$username,$password,$db_name);


if(! $conn ) {
    die("Could not connect: " . mysql_error());
 }

session_start();
	$expireAfter = 20;

if(isset($_SESSION['last_action'])){
    $secondsInactive = time() - $_SESSION['last_action'];
    $expireAfterSeconds = $expireAfter * 60;

    if($secondsInactive >= $expireAfterSeconds){
        session_unset();
        session_destroy();
    }
    
}
$_SESSION['last_action'] = time(); 
?>