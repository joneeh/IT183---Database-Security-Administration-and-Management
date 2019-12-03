<?php
session_start();
require_once('connection.php');
	if(isset($_POST['changepass']))
	{
        $query8="update customer set cpassword='".$_POST['password']."' where id='".$_SESSION['id']."'";
        if (mysqli_query($conn, $query8)) 
        {
            header("location:customer.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
	}
?>