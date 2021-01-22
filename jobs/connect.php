<?php
	$companyName = $_POST['companyName'];
	$position = $_POST['position'];
	$experience = $_POST['experience'];
	$ctc = $_POST['ctc'];
	$passout = $_POST['passout'];
	$lastDate = $_POST['lastDate'];
	$link = $_POST['link'];
	


	//Database Connection

	 
		if(!empty($companyName) || !empty($link)) {
			$host = "localhost";
			$dbusername = "root";
			$dbpassword="";
			$dbname = "jobs";

			//connection
			$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

			if (mysqli_connect_error()) {
				die();
			}else{
				$sql = "INSERT INTO joblist (companyName, position, experience, ctc, passout, lastDate, link)
				values('$companyName', '$position', '$experience', '$ctc', '$passout', '$lastDate', '$link')";
				if ($conn->query($sql)) {
					echo "Have a nice day ahead!!";
				}else{
					echo "Error: ". $sql ."<br>". $conn->error;
				}
				$conn->close();
			}

		}
		else{
			echo "JOB POSTED!!!!";
			die();
		}
	
?>