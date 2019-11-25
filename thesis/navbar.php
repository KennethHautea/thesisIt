

<div class="logo">
	<img x="0" y="0" width="100%" height="100%" src= "logo.png"></img>
</div>
<?php

if(isset($_SESSION["username"])){
	echo "
	<div id='navbar'>
	<div id='Create_Event'>
		<a href='Create_Event.php' >Create Event</a>
	</div>
	<div id='Events'>
		<a href='create_Invitation.php' >Events</a>
	</div>
	<div id='Account'>
		<a href='account.php'>Account</a>
	</div>
	<div id='Help_Center'>
		<a href='help.php'>Help Center</a>
	</div>
	<div id='Login'>
		<a href='index.php'>Login</a>
	</div>
</div>		
	";
}else{
	echo "<div id='navbar'>
	<div id='Create_Event'>
		<a href='Create_Event.php'hidden>Create Event</a>
	</div>
	<div id='Events'>
		<a href='create_Invitation.php'hidden>Events</a>
	</div>
	<div id='Account'>
		<a href='account.php' hidden>Account</a>
	</div>
	<div id='Help_Center' hidden>
		<a href='help.php'>Help Center</a>
	</div>
	<div id='Login'>
		<a href='index.php'>Login</a>
	</div>
</div>";
}
?>
<svg class="Line_1">
	<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 0 L 1280 0"></path>
</svg>
