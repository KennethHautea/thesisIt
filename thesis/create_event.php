<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<link rel="stylesheet" type="text/css" href="./style/create_event.css">
		<link rel="stylesheet" type="text/css" href="./style/signupstyle.css">
		<link  type="text/css" href="js/create_event.js">
		<title>Create Event</title>
	</head>
	<body>
	
<form method="POST" >
<div id="Create_Eventform">
<?php include 'navbar.php' ?>

<?php include 'config.php';

	
	if(isset($_POST['btn_saveevent'])) {
		if(!empty($_POST['eventname']) || !empty($_POST['eventenddate'])){
			$eventname = $_POST['eventname'];
			$eventenddate = $_POST['eventenddate'];
			$sql_n = "SELECT * FROM eventdetails WHERE EventName = '$eventname'";
			$res_n = mysqli_query($conn, $sql_n);
		if(mysqli_num_rows($res_n) > 0){
			echo '<script type="text/javascript">  
						if(window.alert("Event Name already existed! Please provide another name.")){
							window.location.href = "create_event.php"
						}
					</script>';
		}
		else {
			$result = mysqli_query($conn, "INSERT INTO eventdetails(EventName, EventEnd) VALUES('$eventname', '$eventenddate')");

			header ('location: Create_Invitation.php');
			
		}
		
		}
	}
	
	?>
	
	<div id="save_event">
		<input type="submit" name="btn_saveevent" class="Rectangle_5" value="save event">
	</div>

	<div id="event_name">
		<div id="Event_Name">
			<span>Event Name</span>
		</div>
		<input type="text" name="eventname" class="edittext_EditText" required>
	</div>

	<div id="end_time">
		<div id="End_Date">
			<span>End Date</span>
		</div>
		<input type="date" name="eventenddate" class="datetime_EndTime" required>
	</div>

	

</div>
</form>
</body>
</html>