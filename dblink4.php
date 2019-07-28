<?php
	if (!mysqli_connect("localhost", "root", "", "loginsystem")) {
			die(mysqli_error());
		}
		else
		{
			$connect = mysqli_connect("localhost", "root", "", "loginsystem");
			echo 'Connection successful !';
		}


if(true)
	{
		$appointmenno = $_POST['appointmenno'];
		$postponeno = $_POST['postponeno'];
		$Date = $_POST['Date'];
		$Time = $_POST['Time'];
		$doctorname = $_POST['doctorname'];
		
		
	
		if(isset($_POST['Send2']))
		{
			$sql = "INSERT INTO postpone VALUES ('$appointmenno', '$postponeno', '$Date' , '$Time', '$doctorname')";
			if(!mysqli_query($connect, $sql))
			{
				die('Error : '. mysql_error());
			}
			else
			{
				echo '1 recode added successfuly';
			}
		}
			
		}
	
	
			
?>  