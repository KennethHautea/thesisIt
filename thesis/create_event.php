<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		
		<link rel="stylesheet" type="text/css" href="css/create_event.css">
		<link  type="text/css" href="js/create_event.js">
		<title>Create Event</title>
	</head>

	<body>
	<div id="Create_Event">
	<svg class="logo">
		<pattern elementId="logo_A2_Rectangle_2" id="logo_A2_Rectangle_2_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="logo_A2_Rectangle_2_pattern.png" xlink:href="logo_A2_Rectangle_2_pattern.png"></image>
		</pattern>
		<rect fill="url(#logo_A2_Rectangle_2_pattern)" id="logo" rx="0" ry="0" x="0" y="0" width="165" height="53">
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
	</div>
	<svg class="Line_1">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 0 L 1280 0">
		</path>
	</svg>

	<!-- Event Name Text Field-->
	<form method="GET">
	<div id="event_name">
		<div id="Event_Name">
			<span>Event Name</span>
		</div>
		<svg class="edittext_EditText">
			<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="edittext_EditText" rx="0" ry="0" x="0" y="0" width="483" height="40">
			</rect>
		</svg>
		<input type="text" class="edittext_EditText" name="event_name_txt">
	</div>
	
	<!-- Event Datetime Text Field-->
	<div id="end_time">
		<div id="End_Date">
			<span>End Date</span>
		</div>
		<svg class="datetime_EndTime">
			<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="datetime_EndTime" rx="0" ry="0" x="0" y="0" width="190" height="40">
			</rect>
		</svg>
		<input type="text" class="datetime_EndTime" name="event_date_txt">
	</div>

	<!-- Save Event Button-->
	<div id="save_event">
		<svg class="button_SaveInvitation">
			<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="button_SaveInvitation" rx="25.5" ry="25.5" x="0" y="0" width="217" height="51">
			</rect>
		</svg>
		<button type="button" class="button_SaveInvitation" name="save_event_btn" value="Create_Event">
		<div id="Save_Event">
			<span>Save Event</span>
		</div>
		</button>
	</div>
	</form>


</div>
</body>
</html>