<?php
session_start();
require_once('connection.php');
    if(isset($_POST['deposit']))
    {
        $query7="update customer set balance=balance + '".$_POST['depoM']."'where accountNumber='".$_SESSION['accountNumber']."'";

        if ($data1 = mysqli_query($conn, $query7))
        {
            $query15="select * from employee where fname='".$_SESSION['fname']."' and lname='".$_SESSION['lname']."'" ;
            $result15=mysqli_query($conn,$query15);
            
            if($data15 = mysqli_fetch_array($result15))
			{
                if($_SESSION['position']=$data15['position']=='Teller')
                {
					$_SESSION['position']=$data15['position'];
                    echo $_SESSION['position'].
                    header("location:manage.php");
                }
                elseif($_SESSION['position']=$data15['position']=='Manager')
                {
					$_SESSION['position']=$data15['position'];
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