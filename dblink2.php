<?php
	if (!mysqli_connect("localhost", "root", "", "loginsystem")) {
			die(mysqli_error());
		}
		else
		{
			$connect = mysqli_connect("localhost", "root", "", "loginsystem");
			echo 'Connection successful !';
		}


#(!empty($_POST['rnumber']) || !empty($_POST['reason']) || !empty($_POST['accname']) ||  !empty($_POST['bank']) !empty($_POST['branch'])  || !empty($_POST['bankno'])) 
if(true)
	{
		$rnumber = $_POST['rnumber'];
		$reason = $_POST['reason'];
		$accname = $_POST['accname'];
		$bank = $_POST['bank'];
		$branch = $_POST['branch'];
		$bankno = $_POST['bankno'];
		
		
	
		if(isset($_POST['Send']))
		{
			$sql = "INSERT INTO refund VALUES ('$rnumber', '$reason', '$accname' , '$bank', '$branch', '$bankno')";
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