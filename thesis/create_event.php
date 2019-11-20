<!DOCTYPE html>
<html>
<<<<<<< HEAD
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<link rel="stylesheet" type="text/css" href="./style/create_event.css">
		<link  type="text/css" href="js/create_event.js">
		<title>Create Event</title>
	</head>

	<body>
	<div id="Create_Event">
	<svg class="logo">
		<pattern elementId="logo_A5_Rectangle_2" id="logo_A5_Rectangle_2_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="logo_A5_Rectangle_2_pattern.png" xlink:href="logo_A5_Rectangle_2_pattern.png"></image>
		</pattern>
		<rect fill="url(#logo_A5_Rectangle_2_pattern)" id="logo" rx="0" ry="0" x="0" y="0" width="165" height="53">
		</rect>
	</svg>
	<div id="navbar">
		<div id="Create_Event_A2_Text_1">
			<a href=""><span>Create Event</span></a>
		</div>
		<div id="Events">
			<a href=""><span>Events</span></a>
		</div>
		<div id="Account">
			<a href=""><span>Account</span><a>
		</div>
		<div id="Help_Center">
			<a href=""><span>Help Center</span></a>
		</div>
		<div id="Logout">
			<a href=""><span>Logout</span></a>
		</div>
=======
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="stylesheet" type="text/css" href="style/create_event.css">
<link rel="stylesheet" type="text/css" href="style/signupstyle.css">
<link type="text/css" href="js/createevent.js">
<title>Create Event</title>
</head>
<body>
<form method="POST" onsubmit="return validate()">
<div id="Create_Eventform">
	<?php include 'navbar.php' ?>
	<div id="save_event">
		<input type="submit" name="" class="Rectangle_5" value="save event">
>>>>>>> ffe01d49e7e1f9af050a11a42a9ec8a2d1260e1b
	</div>
	<div id="event_name">
		<div id="Event_Name">
			<span>Event Name</span>
		</div>
		<input type="text" name="" class="edittext_EditText">
	</div>
	<div id="end_time">
		<div id="End_Date">
			<span>End Date</span>
		</div>
		<input type="date" name="" class="datetime_EndTime">
		
	</div>
</div>
</form>
</body>
</html>