<?php
session_start();
require_once('connection.php');
    if(isset($_POST['ok3']))
    {
        $query30="select * from customer where accountNumber='".$_POST['accountNumber']."'";
        $result30=mysqli_query($conn,$query30);
        
        if($data30 = mysqli_fetch_array($result30))
        {
            $_SESSION['cfname']=$data30['cfname'];
            $_SESSION['clname']=$data30['clname'];
            $_SESSION['accountType']=$data30['accountType'];
            $_SESSION['accountNumber']=$data30['accountNumber'];
            $_SESSION['cardNumber']=$data30['cardNumber'];
            $_SESSION['balance']=$data30['balance'];
            header("location:withdrawacc.php");
        }
        else 
        {
            header("location:deposit.php?invalid=Theres no existing Account Number.");
        }
    }
?>