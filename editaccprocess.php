<?php
session_start();
require_once('connection.php');
	if(isset($_POST['confedit']))
	{
        $query9="update customer set 
        cfname='".$_POST['cfname']."',
        clname='".$_POST['clname']."',
        cpassword='".$_POST['cpassword']."',
        cardNumber='".$_POST['cardnumber']."'
        where accountNumber='".$_SESSION['accountNumber']."'";
        
        $query10="update customer set 
        cfname='".$_POST['cfname']."',
        clname='".$_POST['clname']."',
        cpassword='".$_POST['cpassword']."'
        where accountNumber='".$_SESSION['accountNumber']."'";
        
        $query11="update customer set 
        cfname='".$_POST['cfname']."',
        clname='".$_POST['clname']."'
        where accountNumber='".$_SESSION['accountNumber']."'";
        
        $query12="update customer set 
        cfname='".$_POST['cfname']."'
        where accountNumber='".$_SESSION['accountNumber']."'";
        
        $query13="update customer set
        clname='".$_POST['clname']."',
        cpassword='".$_POST['cpassword']."',
        cardNumber='".$_POST['cardnumber']."'
        where accountNumber='".$_SESSION['accountNumber']."'";
        
        $query14="update customer set 
        cpassword='".$_POST['cpassword']."',
        cardNumber='".$_POST['cardnumber']."'
        where accountNumber='".$_SESSION['accountNumber']."'";

        
        $query15="update customer set
        cardNumber='".$_POST['cardnumber']."'
        where accountNumber='".$_SESSION['accountNumber']."'";

        if (mysqli_query($conn, $query9)) 
        {
            header("location:managerview.php");
        }
        elseif (mysqli_query($conn, $query10)) 
        {
            header("location:managerview.php");
        }
        elseif (mysqli_query($conn, $query11)) 
        {
            header("location:managerview.php");
        }
        elseif (mysqli_query($conn, $query12)) 
        {
            header("location:managerview.php");
        }
        elseif (mysqli_query($conn, $query13)) 
        {
            header("location:managerview.php");
        }
        elseif (mysqli_query($conn, $query14)) 
        {
            header("location:managerview.php");
        }
        elseif (mysqli_query($conn, $query15)) 
        {
            header("location:managerview.php");
        }
        elseif (mysqli_query($conn, $query16)) 
        {
            header("location:managerview.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
	}
?>