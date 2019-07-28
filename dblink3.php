<?php
	if (!mysqli_connect("localhost", "root", "", "loginsystem")) {
			die(mysqli_error());
		}
		else
		{
			$connect = mysqli_connect("localhost", "root", "", "loginsystem");
			echo 'Connection successful !';
		}


#(!empty($_POST['dname']) || !empty($_POST['speciality']) || !empty($_POST['hospital']) ||  !empty($_POST['date'])) 
if(true)
	{
		//$dname = $_POST['dname'];
		//$speciality = $_POST['speciality'];
		//$hospital = $_POST['hospital'];
		//$date = $_POST['date'];
		
		
	
		if(isset($_POST['Search']))
		{	
		$result = mysqli_query($connect,"SELECT * FROM doctor");
while($row = mysqli_fetch_array($result)) {
echo $row['dname'] . " " . $row['speciality']." ".$row['hospital']."".$row['date'];
echo "<br>";
}
	}
	}
mysqli_close($connect);
			
		
		
?>