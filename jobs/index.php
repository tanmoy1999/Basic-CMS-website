<!DOCTYPE html>
<html>
<head>
	<title> IT Job Updates, Govt. Jobs Updates, Core Company Updates, etc  </title>
	
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color: blue;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			table-layout: fixed;
		}
		th{
			
			background: gray;
			color: white;
			overflow: hidden;
		}
		tr{
			background-color: #F0F0F0;
			overflow: hidden;
			text-align: center;
			
		}
	</style>
</head>
<body>
	<center>
	<h1>JOB UPDATES and OFF CAMPUSING NEWS</h1>
	<h2>IT Job Updates, Govt. Jobs Updates, Core Company Updates, etc </h2>
	
	</center>
<table>
	<tr>
		<th>Published</th>
		<th>Company Name</th>
		<th>Position</th>
		<th>Experience</th>
		<th>CTC(LPA)</th>
		<th>Passout</th>
		<th>Last Date</th>
		<th>APPLY LINK</th>

        
	</tr>
    
	<?php
	$conn = mysqli_connect("localhost","root","","jobs");
	if ($conn-> connect_error) {
		die("Connection Failed". $conn-> connect_error);
	}
	$sql = "SELECT published,companyName, position, experience, ctc, passout, lastDate, link from joblist ORDER BY id DESC";
	$result = $conn-> query($sql);
	if ($result-> num_rows > 0) {
		while($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["published"]."</td><td>".$row["companyName"]."</td><td>".$row["position"]."</td><td>".$row["experience"]."</td><td>".$row["ctc"]."</td><td>".$row["passout"]."</td><td>".$row["lastDate"]."</td><td>"."<a href='" . $row['link'] . "'>Apply Now</a>" . "</a> "."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 result";
	}

	$conn-> close();
	
	?>
</table>
</body>
<script>
	
</script>
</html>