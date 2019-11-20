<?php include '../config.php'; 
$username = $password = "";
if(isset($_POST['btn_login'])){
	
	if(!empty($_POST['username']) || !empty($_POST('password'))){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
	}

	$yawa =  'test123';
	
}
/** 
	*	$password = strip_tags(mysqli_real_escape_string($conn,trim($password)));
	*	$query = "SELECT 	UserName,Passwords 
	*									FROM registeredhost 
	*									WHERE UserName='".$username."'and Passwords = '".$password."' ";
	*	$result = mysqli_query($conn,$query);								
	
	*if(mysqli_num_rows($result) > 1){
	*	$row = mysqli_fetch_array($result);
	*	$hash = $row['password'];
	
	*	if(password_verify($password,$hash)){
	*		echo 'YAseajhsvfgjhkdw,hgmf';
	*	}
	*}
	*}
	*}
	*/
?>
