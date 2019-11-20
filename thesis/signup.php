<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style/signupstyle.css">
<link type="text/css" href="js/signupstyle.js">
</head>
<body>
<form method="POST" onsubmit="return validate()">
<div id="Signup">
	<svg class="Rectangle_4">
		<rect fill="rgba(227,227,227,1)" stroke="rgba(0,0,0,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_4" rx="30" ry="30" x="0" y="0" width="708" height="835">
		</rect>
	</svg>
	<div id="btn_Signup">
		<input type="submit" name="signup" class="Rectangle_5" value="Sign up">
	</div>
	<div id="Password">
		<input type="password" name="firstname" id="edittext_Password" class="edittext_Password" required >
		<div id="Password_A6_Text_2">
			<span>Password</span>
		</div>
	</div>
	<div id="Username">
		<input type="text" name="firstname" id="edittext_Username" class="edittext_Username" required >
		<div id="Username_A6_Text_3">
			<span>Username</span>
		</div>
	</div>
	<div id="EmailAddress">
		<input type="Emails" name="EmailAddress" id="edittext_EmailAddress" class="edittext_EmailAddress" required>
		<div id="Email_Address">
			<span>Email Address</span>
		</div>
	</div>
	<div id="Middlename">
		<input type="text" name="Middlename" id="edittext_Middlename" class="edittext_Middlename">
		<div id="Middlename_A6_Text_5">
			<span>Middlename</span>
		</div>
	</div>
	<div id="Lastname">
		<input type="text" name="Lastname" id="edittext_Lastname" class="edittext_Lastname" required >
		<div id="Lastname_A6_Text_6">
			<span>Lastname</span>
		</div>
	</div>
	<div id="Firstname"> 
		<input type="text" name="firstname" id="edittext_Firstname" class="edittext_Firstname" required>				
		<div id="Firstname_A6_Text_7">
			<span>Firstname</span>
		</div>
	</div>
	<?php include 'navbar.php' ?>
</div>
</form>
</body>
</html>