<?php 

		$username = $_SESSION["username"];

		$check_hostid = mysqli_query($conn,"SELECT HostId FROM `registeredhost` WHERE UserName = '$username' ");
		$hostCheckId = mysqli_fetch_assoc($check_hostid);

		$host_id = $hostCheckId['HostId'];

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
			$result = mysqli_query($conn, "INSERT INTO eventdetails(HostId,EventName, EventStart, EventEnd) VALUES('$host_id',$eventname', NOW(), '$eventenddate')");

			header ('location: Create_Invitation.php');
			
		}
		
		}
	}
?>
