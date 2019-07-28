<?php

if(isset($_GET['salutations'])){    
$sql = "delete from registration where id = '".$_GET['salutations']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from registration";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>salutations</td>    
                <td>firstName</td>    
                <td>Middle Name</td>    
                <td>lastName</td>    
                <td>citizen</td>    
                <td>nicNO</td>    
                <td>email</td>    
                <td>bday</td>    
                <td>mobileNo</td>    
                <td>bloodgrp</td>    
                <td>address</td>    
                <td>psw</td>    
                <td>confirmpsw</td>      
            </tr>    
        </table>    
    </body>    
</html>    




?>