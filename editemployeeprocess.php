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

<?php
session_start();
require_once('connection.php');
    if(isset($_POST['ok5']))
    {
        $query50="select * from employee where fname='".$_POST['fname']."' and lname='".$_POST['lname']."'";
        $result50=mysqli_query($conn,$query50);
        
        if($data50 = mysqli_fetch_array($result50))
        {
            $_SESSION['fname']=$data50['fname'];
            $_SESSION['lname']=$data50['lname'];
            $_SESSION['bid']=$data50['id'];
            $_SESSION['bid']=$data50['bid'];
            $_SESSION['email']=$data50['email'];
            $_SESSION['password']=$data50['password'];
            $_SESSION['position']=$data50['position'];
            header("location:editemployee.php");
        }   
        else 
        {
            header("location:deleteemployee.php?invalid=There's no existing Employee.");
        }
    }
?>