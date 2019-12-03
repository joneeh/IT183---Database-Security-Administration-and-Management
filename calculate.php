<?php
session_start();
require_once('connection.php');
    if(isset($_POST['withdraw']))
    {
        $query3="update customer set balance=balance - '".$_POST['withdrawM']."'where accountNumber='".$_SESSION['accountNumber']."'";

        if ($data1 = mysqli_query($conn, $query3))
        {
            $_SESSION['balance']=$data['balance'];
            header("location:result.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>