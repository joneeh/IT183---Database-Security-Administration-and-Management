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