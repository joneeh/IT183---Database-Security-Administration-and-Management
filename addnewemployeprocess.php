<?php
session_start();
require_once('connection.php');
	if(isset($_POST['newEmp']))
	{
        if($_SESSION['bid']='ASHBR235JA')
        {
            $bid=1;
        }
        elseif($_SESSION['bid']='SADWR132TA')
        {
            $bid=2;
        }

        $query40="insert ignore into employee (id, bid, fname, lname, email, password, position)
        Values(NULL, $bid,'".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['position']."')" ;
        
        $result40=mysqli_query($conn,$query40);
        if ($data40 = mysqli_query($conn, $query40))
        {
            header("location:adminview.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
	}
?>