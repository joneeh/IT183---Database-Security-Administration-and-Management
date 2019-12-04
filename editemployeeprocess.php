<?php
session_start();
require_once('connection.php');
	if(isset($_POST['confeditemp']))
	{
        $query9="update employee set 
        fname='".$_POST['fname']."',
        lname='".$_POST['lname']."',
        email='".$_POST['email']."',
        position='".$_POST['position']."',
        password='".$_POST['password']."'
        where id='".$_SESSION['id']."'";

        if (mysqli_query($conn, $query9)) 
        {
            header("location:adminview.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
	}
?>