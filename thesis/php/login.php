<?php
include '../config.php';
/** 
*$hash = '$2y$10$drrTvJy07wrWhHUBhbbPy.7HYjizboQdKVzQBt8rewO';

*if (password_verify('asd', $hash)) {
*    echo 'Password is valid!';
*} else {
*    echo 'Invalid password.';
*}
*/

$username = $password = "";
if(isset($_POST['btn_login'])){
	
	if(!empty($_POST['username']) || !empty($_POST('password'))){
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$_SESSION["username"]= $_POST["username"];

//
		
		$check_user = mysqli_query($conn,"SELECT * FROM registeredhost Where UserName = '$username'");
		$check_row = mysqli_num_rows($check_user);

		if($check_row >	0){
			
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
