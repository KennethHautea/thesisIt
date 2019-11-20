<!DOCTYPE html>
<html>
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