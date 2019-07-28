<?php
	if (!mysqli_connect("localhost", "root", "", "loginsystem")) {
			die(mysqli_error());
		}
		else
		{
			$connect = mysqli_connect("localhost", "root", "", "loginsystem");
			echo 'Connection successful !';
		}

#(!empty($_POST['salutations']) || !empty($_POST['firstName']) || !empty($_POST['lastName']) ||  !empty($_POST['citizen']) || !empty($_POST['nicNO']) || !empty($_POST['email']) ||   !empty($_POST['bday']) || !empty($_POST['mobileNo']) || !empty($_POST['bloodgrp']) || !empty($_POST['address']) || !empty($_POST['psw']) || !empty($_POST['confirmpsw']))
if(true)
	{
		$salutations = $_POST['salutations'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$citizen = $_POST['citizen'];
		$nicNO = $_POST['nicNo'];
		$email = $_POST['email'];
		$bday= $_POST['bday'];
		$mobileNo = $_POST['mobileNo'];
		$bloodgrp = $_POST['bloodgrp'];
		$address = $_POST['address'];
		$psw = $_POST['psw'];
		$confirmpsw = $_POST['confirmpsw'];
		
	
		if(isset($_POST['submit3']))
		{
			$sql = "INSERT INTO users VALUES ('$salutations', '$firstName', '$lastName' , '$citizen', '$nicNO', '$email', '$bday', '$mobileNo' , '$bloodgrp', '$address', '$psw', '$confirmpsw');";
			if(!mysqli_query($connect, $sql))
			{
				die('Error : '. mysql_error());
			}
			else
			{
				echo '1 recode added successfuly';
				 header('Location: index.php');
			}
		}
			
		}
	
	
			
?>    