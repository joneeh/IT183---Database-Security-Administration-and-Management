<?php
session_start();
require_once('connection.php');
	if(isset($_POST['confedit']))
	{
        $query9="update customer set 
        cfname='".$_POST['cfname']."',
        clname='".$_POST['clname']."',
        cemail='".$_POST['cemail']."',
        cpassword='".$_POST['cpassword']."'
        where accountNumber='".$_SESSION['accountNumber']."'";

        if (mysqli_query($conn, $query9)) 
        {
            header("location:managerview.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
	}
?>