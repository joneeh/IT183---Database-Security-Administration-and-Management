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

<?php
session_start();
require_once('connection.php');
    if(isset($_POST['ok3']))
    {
        $query6="select * from customer where accountNumber='".$_POST['accountNumber']."'";
        $result6=mysqli_query($conn,$query6);
        
        if($data5 = mysqli_fetch_array($result6))
        {
            $_SESSION['cfname']=$data5['cfname'];
            $_SESSION['clname']=$data5['clname'];
            $_SESSION['cemail']=$data5['cemail'];
            $_SESSION['cpassword']=$data5['cpassword'];
            $_SESSION['accountType']=$data5['accountType'];
            $_SESSION['accountNumber']=$data5['accountNumber'];
            $_SESSION['cardNumber']=$data5['cardNumber'];
            $_SESSION['balance']=$data5['balance'];
            header("location:editacc.php");
        }
        else 
        {
            header("location:editacc.php?invalid=Theres no existing Account Number.");
        }
    }
?>