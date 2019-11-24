<?php
include '../config.php';
$username = $password = "";
if(isset($_POST['btn_login'])){
	
	if(!empty($_POST['username']) || !empty($_POST('password'))){
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$_SESSION["username"]= $_POST["username"];

//
		
		$check_user = mysqli_query($conn,"SELECT * FROM registeredhost Where UserName = '$username'");
		$check_row = mysqli_num_rows($check_user);

		if($check_row >	 0){
			
			while($row = mysqli_fetch_array($check_user)){
				if(password_verify($password,$row['Passwords'])){
					echo 'okey keyohh';
				}else{
					echo 'nyawa nani';
				}
			}
		}
		
	}

	
	
}

?>
