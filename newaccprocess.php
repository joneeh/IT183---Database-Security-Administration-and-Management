<?php
session_start();
require_once('connection.php');
	if(isset($_POST['newAcc']))
	{
        if($_SESSION['bid']='ASHBR235JA')
        {
            $bid=1;
        }
        elseif($_SESSION['bid']='SADWR132TA')
        {
            $bid=2;
        }

        $y = 16;
        $x = 10;

        $min = pow(10,$x);
        $max = pow(10,$x+1)-1;
        
        $minc = pow(10,$y);
        $maxc = pow(10,$y+1)-1;

        $accN = rand($min, $max);
        $cardN = rand($minc, $maxc);
        $query4="insert ignore into customer (id, bid, cfname, clname, expiryDate, cemail, cpassword, accountNumber, cardNumber, balance, accountType)
        Values(NULL, $bid,'".$_POST['fname']."','".$_POST['lname']."', TIMESTAMPADD(YEAR,5,current_date),'".$_POST['email']."','".$_POST['password']."',
        $accN,$cardN,'500','".$_POST['cardType']."')" ;
        
        $result4=mysqli_query($conn,$query4);
        if ($data2 = mysqli_query($conn, $query4))
        {
            header("location:managerview.php");
        }
        else 
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
	}
?>