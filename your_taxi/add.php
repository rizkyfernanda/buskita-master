<?php
 
	// Check If form submitted, insert form data into users table.
 	if(isset($_POST['Submit1'])) {
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$loc_from = $_POST['From'];
		$loc_to = $_POST['To'];
		$time = $_POST['Time'];
		$date = $_POST['Date'];
		$comfort = $_POST['Comfort'];
		$adults = $_POST['Adults'];
		$children = $_POST['Children'];
		$message = $_POST['Message'];
							
		// include database connection file
		include_once("config.php");
									
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO `pesanbus2`(`name`, `email`, `loc_from`, `loc_to`, `time`, `date`, `comfort`, `adults`, `children`, `message`) VALUES('$name','$email','$loc_from','$loc_to','$time','$date','$comfort','$adults','$children','$message');");

	}

	if(isset($_POST['Submit2'])) {
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$message = $_POST['Messsage'];
							
		// include database connection file
		include_once("config.php");
									
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO `contactus`(`name`, `email`, `message`) VALUES('$name','$email','$message');");

	}

?>