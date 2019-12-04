<?php
session_start();
require_once('connection.php');
    if(isset($_POST['withdrawMan']))
    {
        $query31="update customer set balance=balance - '".$_POST['depoM']."'where accountNumber='".$_SESSION['accountNumber']."'";

        if ($data31 = mysqli_query($conn, $query31))
        {
            $query32="select * from employee where fname='".$_SESSION['fname']."' and lname='".$_SESSION['lname']."'" ;
            $result32=mysqli_query($conn,$query32);
            
            if($data32 = mysqli_fetch_array($result32))
			{
                if($_SESSION['position']=$data32['position']=='Teller')
                {
					$_SESSION['position']=$data32['position'];
                    echo $_SESSION['position'].
                    header("location:manage.php");
                }
                elseif($_SESSION['position']=$data32['position']=='Manager')
                {
					$_SESSION['position']=$data32['position'];
                    header("location:managerview.php");
                }
            }
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