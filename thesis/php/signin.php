<?php include 'config.php';
	
$firstname = $lastname = $middlename = $emailAddress = $username =$password = ""; 


if(isset($_POST['btn_signup'])){
	if(!empty ($_POST['firstname'])||!empty ($_POST['middlename'])||!empty ($_POST['lastname'])||!empty ($_POST['emailAddress'])||
	!empty ($_POST['username'])||!empty ($_POST['password'])){
		$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
		$middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
		$lastname = mysqli_real_escape_string($conn,$_POST['lastname']) ;
		$emailAddress = mysqli_real_escape_string($conn,$_POST['emailAddress']);
		$username = mysqli_real_escape_string($conn,$_POST['username']) ;
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$password = PASSWORD_HASH($password, PASSWORD_DEFAULT);
		
		$result  = mysqli_query($conn,"INSERT INTO registeredhost(UserName,FirstName,MiddleName,LastName,Dates,
		EmailAddress,Passwords) VALUES('$username','$firstname','$middlename','$lastname',' ','$emailAddress','$password')");
		
		if($result){
			echo '<script type="text/javascript">  
						if(window.confirm("Successfully Inserted")){
							window.location.href = "index.php"
						}
			
			</script>';
			
		}
	}

	/** 
*	if(!empty ($_POST['firstname'])){
*		$firstname = $_POST['firstname'];
*	}
*	if(!empty ($_POST['lastname'])){
*		$lastname = $_POST['lastname'];
*	}
*	if(!empty ($_POST['middlename'])){
*		$middlename = $_POST['middlename'];
*	}
	 
*	if(!empty ($_POST['emailAddress'])){
*		$emailAddress = $_POST['emailAddress'];
*	}
	
*	if(!empty ($_POST['username'])){
*		$username = $_POST['username'];
*	}
	
*	if(!empty ($_POST['password'])){
*		$password = $_POST['password'];
		
*	}	*/
	
}
?>