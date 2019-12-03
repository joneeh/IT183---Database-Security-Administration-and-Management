<?php
session_start();
require_once('connection.php');
    if(isset($_POST['deposit']))
    {
        $query7="update customer set balance=balance + '".$_POST['depoM']."'where accountNumber='".$_SESSION['accountNumber']."'";

        if ($data1 = mysqli_query($conn, $query7))
        {
            header("location:manage.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>