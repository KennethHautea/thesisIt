<?php include 'php/signin.php'; ?>
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
<form method="POST">
<div id="Signup">
	<svg class="Rectangle_4">
		<rect fill="rgba(227,227,227,1)" stroke="rgba(0,0,0,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_4" rx="30" ry="30" x="0" y="0" width="708" height="835">
		</rect>
    </svg>

    <!--Signup Form-->  
	<form autocomplete="off" method="POST">
		<div class="form" id="forms">
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
		<div id="Username">
			<input type="text" name="username" id="edittext_Username" class="edittext_Username" reguired>
			<div id="Username_A6_Text_3">
				<span>Username</span>
			</div>
		</div>
		<div id="Password">
			<input type="password" name="password" id="edittext_Password" class="edittext_Password" reguired >
			<div id="Password_A6_Text_2">
				<span>Password</span>
			</div>
		</div>
		<div id = "btn_Signup">
			<input type="submit" name="btn_signup" value="Submit" class="Rectangle_5">
		</div>
		</div>
    </form>
	<?php include 'navbar.php' ?>
</div>

</body>
</html>