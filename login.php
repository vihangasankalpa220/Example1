<?php
  if (!mysqli_connect("localhost", "root", "", "loginsystem")) {
      die(mysqli_error());
    }
    else
    {
      $connect = mysqli_connect("localhost", "root", "", "loginsystem");
      echo 'Connection successful !';
    }


  $uname = $_POST["uname"];
  $psw = $_POST["psw"];

  $sql1 = "SELECT * FROM login WHERE uname='$uname' AND psw='$psw'";
  
  $sql2 = "SELECT * FROM Admin_login WHERE admin_name='$uname' AND psw='$psw'"; //admin login

  $query_result1 = mysql_query($sql1);
  $query_result2 = mysql_query($sql2);
  
  $row_count1 = mysql_num_rows($query_result1);
  $row_count2 = mysql_num_rows($query_result2);
  
  if($row_count1 == 1)
  {
    session_start();
    $_SESSION["uname"] = $_POST["uname"];
    $_SESSION["userlevel"] = 2;
    
    header('Location: dummypage.php');
  }
  elseif ($row_count2 == 1)
  {
    session_start();
    $_SESSION["uname"] = $_POST["uname"];
    $_SESSION["userlevel"] = 1;
    
    header('Location: admin_panel.php');
  }
  else
  {
    echo "Wrong email or password.";
  }
  
?>