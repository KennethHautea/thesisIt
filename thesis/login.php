<?php include_once 'config.php'; 
	
$username = $password = "";
if(isset($_POST['btn_login'])){
	
	if(!empty($_POST['username'])||!empty($_POST('password'))){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$password = strip_tags(mysqli_real_escape_string($conn,trim($password)));
		$query = "SELECT 	UserName,Passwords 
										FROM registeredhost 
										WHERE UserName='".$username."'and Passwords = '".$password."' ";
		$result = mysqli_query($conn,$query);								
	
	if(mysqli_num_rows($result) > 1){
		$row = mysqli_fetch_array($result);
		$hash = $row['password'];
	
		if(password_verify($password,$hash)){
			echo 'YAseajhsvfgjhkdw,hgmf';
		}
	}
	}
}
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="stylesheet" href="./style/loginstyle.css">
<link  href="./js/loginstyle.js">
<title>Rsvp</title>


</head>
<body>
<p><?php echo $password; ?></p>

<script type = "text/javascript">
function validate(){
	var username = document.getElementById("val_username").value; 
}
</script>
<div id="Login">
	<svg class="logo">
		<pattern elementId="logo_A5_Rectangle_2" id="logo_A5_Rectangle_2_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="logo_A5_Rectangle_2_pattern.png" xlink:href="logo_A5_Rectangle_2_pattern.png"></image>
		</pattern>
		<rect fill="url(#logo_A5_Rectangle_2_pattern)" id="logo" rx="0" ry="0" x="0" y="0" width="165" height="53">
		</rect>
	</svg>
	<div id="navbar">
		<div id="Create_Event">
			<a href=""><span>Create Event</span></a>
		</div>
		<div id="Events">
			<a href=""><span>Events</span></a>
		</div>
		<div id="Account">
			<a href=""><span>Account</span></a>
		</div>
		<div id="Help_Center">
			<a href=""><span>Help Center</span></a>
		</div>
		<div id="Login_A5_Text_5">
			<a href=""><span>Login</span></a>
		</div>
	</div>


	<svg class="Line_1">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 0 L 1280 0">
		</path>
	</svg>
	<svg class="Rectangle_4">
		<rect fill="rgba(227,227,227,1)" stroke="rgba(0,0,0,1)" stroke-width="1px" stroke-linejoin="miter" 
		stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_4" rx="30" ry="30" x="0" 
		y="0" width="708" height="400">
		</rect>
	</svg>
	
	<!--Login Form-->
	<form method="POST" name = "myform" onsubmit = "return validate()">
		<div id="Username">
			<input type="text" class="edittext_Username" name="username" id="val_username" required  >
			<div id="Username_A5_Text_6">
				<span>Username</span>
			</div>
		</div>
		
		<div id="Password">
			<input type="password" class="edittext_Password"  name="password" id="val_password" required >
			<div id="Password_A5_Text_7">
				<span>Password</span>
			</div>
		</div>
		
		<div id="btn_Login">
			<input type="submit"  class="Rectangle_5" name="btn_login" value="Login">
		</div>
		<div id="Create_Account">
			<a href="signup.php">Create Account</a>
		</div>
	</form>
	
</div>
</body>
</html>