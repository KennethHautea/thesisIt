<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="stylesheet" type="text/css" href="style/createEvent.css">
<link rel="stylesheet" type="text/css" href="style/signupstyle.css">
<link type="text/css" href="js/createevent.js">
<title>Create Event</title>
</head>
<body>
<div id="Create_Eventform">
	<?php include 'navbar.php' ?>
	<div id="save_event">
		<div class="button_SaveInvitation">
			<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap=	"butt" stroke-miterlimit="4" shape-rendering="auto" id="button_SaveInvitation" rx="25.5" ry="25.5" x="0" y="0" width="217" height="51">
			</rect>

		</div>
		<div id="Save_Event">
			<span>Save Event</span>
		</div>
	</div>
	<div id="event_name">
		<div id="Event_Name">
			<span>Event Name</span>
		</div>
		<div>
			
		</div class="edittext_EditText">
		<input type="text" name="">
	</div>
	<div id="end_time">
		<div id="End_Date">
			<span>End Date</span>
		</div>
		<svg class="datetime_EndTime">
			<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="datetime_EndTime" rx="0" ry="0" x="0" y="0" width="190" height="40">
			</rect>
		</svg>
	</div>
</div>
</body>
</html>