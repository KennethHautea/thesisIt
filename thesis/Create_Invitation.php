<<<<<<< Updated upstream
<<<<<<< HEAD
<?php include 'config.php' ;
$venue = $attire = $date = $time = $message = "";
=======
<?php 
	include 'config.php';
>>>>>>> Stashed changes

if(isset($_POST['btn_saveInvitation'])){
	if(!empty($_POST['venue']) || !empty($_POST['attire'])||!empty($_POST['date'])||!empty($_POST['time'])
	||!empty($_POST['message'])){
		$venue = $_POST['venue'];
		$attire = $_POST['attire'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO eventdetails(EventVenue,EventAttire,EventDescription)
				VALUES('$venue','$attire','$message')";
		if($conn->query($sql) === TRUE){
			echo "New record created successfully";
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		/**$insertEventDetails = mysqli_query($conn,"INSERT INTO eventdetails(EventVenue,EventAttire,EventDescription)
		*											VALUES('$venue','$attire','$message'')");
		*if($insertEventDetails ){
		*	echo '<script type="text/javascript">  
						
		*	window.alert("Successfully Inserted");
						
			
		*	</script>';
			
		*}else{
		*	echo 'not inserted';
		*}
		*/
	}
 }
?>

>>>>>>> 0dc44025e825695fc3a5f2631af9c7aec087592f
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="stylesheet" type="text/css" href="style/createInvitation.css">
<link rel="stylesheet" type="text/css" href="style/signupstyle.css">
<title>Create Invitation</title>
</head>
<body>
<<<<<<< HEAD
	<form action = "" method="POST">
		<div id="Create_Invitation">
			<div id="btn_SaveInvitation">
				<input type="submit" name="btn_saveInvitation" class="Rectangle_5" id="Save_invitation">
=======
	<form>
		
		<div id="Create_Invitation">
			<div id="btn_SaveInvitation">
				<input type="submit" name="btn_saveinvitation" class="Rectangle_5" id="Save_invitation">
>>>>>>> 0dc44025e825695fc3a5f2631af9c7aec087592f
			</div>
			<div id="Templates">
				<svg class="Template_1">
					<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Template_1" rx="0" ry="0" x="0" y="0" width="235" height="163">
					</rect>
				</svg>
				<svg class="Template_2">
					<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Template_2" rx="0" ry="0" x="0" y="0" width="235" height="163">
					</rect>
				</svg>
				<svg class="Template_3">
					<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Template_3" rx="0" ry="0" x="0" y="0" width="235" height="163">
					</rect>
				</svg>
				<svg class="Template_4">
					<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Template_4" rx="0" ry="0" x="0" y="0" width="235" height="163">
					</rect>
				</svg>
			</div>
			<div id="Select_Template">
				<span>Select Template</span>
			</div>
			<div id="Message">
				<textarea name="message" class="edittext_Message" required></textarea >
				<div id="Message_A4_Text_3">
					<span>Message</span>
				</div>
			</div>
			<div id="Time">
				<input type="time" name="time" class="edittext_Time" required>
				<div id="Time_A4_Text_4">
					<span>Time</span>
				</div>
			</div>
			<div id="Date">
				<input type="date" name="date" class="edittext_Date"required >
				<div id="Date_A4_Text_5">
					<span>Date</span>
				</div>
			</div>
			<div id="Attire">
				<input type="text" name="attire" class="edittext_Attire" required>
				<div id="Attire_A4_Text_6">
					<span>Attire</span>
				</div>
			</div>
			<div id="Venue">
				<input type="text" name="venue" class="edittext_Venue" required>
				<div id="Venue_A4_Text_7">
					<span>Venue</span>
				</div>
			</div>
			<div id="Invitation_Details">
				<span>Invitation Details</span>
			</div>
			<?php include 'navbar.php' ?>
			<svg class="Rectangle_6">
				<rect fill="rgba(235,235,235,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_6" rx="43" ry="43" x="0" y="0" width="523" height="741">
				</rect>
			</svg>
		</div>
	</form>

</body>
</html>