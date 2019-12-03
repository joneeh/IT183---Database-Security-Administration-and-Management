<?php
session_start();
require_once('connection.php');
    if(isset($_POST['ok']))
    {
        $query6="select * from customer where accountNumber='".$_POST['accountNumber']."'";
        $result6=mysqli_query($conn,$query6);
        
        if($data4 = mysqli_fetch_array($result6))
        {
            $_SESSION['cfname']=$data4['cfname'];
            $_SESSION['clname']=$data4['clname'];
            $_SESSION['accountType']=$data4['accountType'];
            $_SESSION['accountNumber']=$data4['accountNumber'];
            $_SESSION['cardNumber']=$data4['cardNumber'];
            $_SESSION['balance']=$data4['balance'];
            header("location:deleteacc.php");
        }
        else 
        {
            header("location:deleteacc.php?invalid=Theres no existing Account Number.");
        }
    }
?>
<?php
session_start();
require_once('connection.php');
    if(isset($_POST['confdelete']))
    {
        $query8="delete from customer where accountNumber='".$_SESSION['accountNumber']."'";

        if ($data1 = mysqli_query($conn, $query8))
        {
            header("location:managerview.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>