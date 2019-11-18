<?php include_once 'config.php'; 

$firstname = $lastname = $middlename = $emailAddress = $username =$password = ""; 


if(isset($_POST['btn_signup'])){
	if(!empty ($_POST['firstname'])||!empty ($_POST['middlename'])||!empty ($_POST['lastname'])||!empty ($_POST['emailAddress'])||
	!empty ($_POST['username'])||!empty ($_POST['password'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$emailAddress = $_POST['emailAddress'];
		$username = $_POST['username'];
		$password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);
		
		$result  = mysqli_query($conn,"INSERT INTO registeredhost(UserName,FirstName,MiddleName,LastName,Dates,
		EmailAddress,Passwords) VALUES('$username','$firstname','$middlename','$lastname',' ','$emailAddress','$password')");
		
		if($result){
			echo '<script type="text/javascript">  
						if(window.confirm("Successfully Inserted")){
							window.location.href = "login.php"
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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Rsvp</title>
<link rel="stylesheet" type="text/css" href="./style/signupstyle.css">
<link type="text/css" href="js/signupstyle.js">
 </head>
<body>
<script type = "text/javascript">
function validation(){
	var firstname = document.getElementById('edittext_Firstname').value;
	var lastname = document.getElementById('edittext_Lastname').value;
	var middlename = document.getElementById('edittext_Middlename').value;
	var emailAddress = document.getElementById('edittext_EmailAddress').value;
	var username = document.getElementById('edittext_Username').value;
	var password = document.getElementById('edittext_Password').value;
 
	if((firstname =='')||(lastname =='')||(middlename == '')||(emailAddress == '')||(username == '')||(password == '') ){
	 window.alert('Some field is Empty!');
	 return false;
 }

}
function send_Data(){
	var table = document.getElementById('forms').value;
}
</script>
	
<div id="Signup">
	<svg class="Rectangle_4">
		<rect fill="rgba(227,227,227,1)" stroke="rgba(0,0,0,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_4" rx="30" ry="30" x="0" y="0" width="708" height="835">
		</rect>
    </svg>

    <!--Signup Form-->
    <div class="form" id="forms">
        <form autocomplete="off" method="POST" onsubmit = "return validation();">
	<div id="btn_Signup">
		<input type="submit" name="btn_signup" value="Submit" class="Rectangle_5" onclick = "send_Data();">
	</div>
	
	<div id="Password">
		<input type="password" name="password" id="edittext_Password" class="edittext_Password" reguired >
		<div id="Password_A6_Text_2">
			<span>Password</span>
		</div>
	</div>
	<div id="Username">
		<input type="text" name="username" id="edittext_Username" class="edittext_Username" reguired>
		<div id="Username_A6_Text_3">
			<span>Username</span>
		</div>
	</div>
	<div id="EmailAddress">
		<input type="email" name="emailAddress" id="edittext_EmailAddress" class="edittext_EmailAddress" reguired>
		<div id="Email_Address">
			<span>Email Address</span>
		</div>
	</div>
	<div id="Middlename">
		<input type="text" name="middlename" id="edittext_Middlename" class="edittext_Middlename" reguired>
		<div id="Middlename_A6_Text_5">
			<span>Middlename</span>
		</div>
	</div>
	<div id="Lastname">
		<input type="text" name="lastname" id="edittext_Lastname" class="edittext_Lastname" reguired>
		<div id="Lastname_A6_Text_6">
			<span>Lastname</span>
		</div>
	</div>
	<div id="Firstname"> 
		<input type="text" name="firstname" id="edittext_Firstname" class="edittext_Firstname" reguired>				
		<div id="Firstname_A6_Text_7">
			<span>Firstname</span>
		</div>
    </div>
    </form>
    </div>

    <!---->
	<div id="navbar">
		<div id="Create_Event">
			<a href="#">Create Event</a>
		</div>
		<div id="Events">
			<a href="#">Events</a>
		</div>
		<div id="Account">
			<a href="#">Account</a>
		</div>
		<div id="Help_Center">
			<a href="#">Help Center</a>
		</div>
		<div id="Login">
			<a href="login.php">Login</a>
		</div>
	</div>
</div>
<svg class="logo">
		<pattern elementId="logo_A5_Rectangle_2" id="logo_A5_Rectangle_2_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="logo_A5_Rectangle_2_pattern.png" xlink:href="logo_A5_Rectangle_2_pattern.png"></image>
		</pattern>
		<rect fill="url(#logo_A5_Rectangle_2_pattern)" id="logo" rx="0" ry="0" x="0" y="0" width="165" height="53">
		</rect>
	</svg>
</div>
</body>
</html>