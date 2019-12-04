<?php
session_start();
require_once('connection.php');
	if(isset($_POST['login']))
	{
		if(empty($_POST['email']) || empty($_POST['password']))
		{
			header('location:index.php?empty=Please fill in the blanks!');
		}
		else
		{
			$query="select * from employee where email='".$_POST['email']."' and password='".$_POST['password']."'" ;
			$result=mysqli_query($conn,$query);
			
			$query2="select * from customer where cemail='".$_POST['email']."' and cpassword='".$_POST['password']."'" ;
			$result2=mysqli_query($conn,$query2);

			$query51="select * from admin where adminUser='".$_POST['email']."' and adminPassword='".$_POST['password']."'" ;
			$result51=mysqli_query($conn,$query51);


			if($data = mysqli_fetch_array($result))
			{
				if($_SESSION['position']=$data['position']=='Teller')
				{
					$_SESSION['id']=$data['id'];
					$_SESSION['fname']=$data['fname'];
					$_SESSION['lname']=$data['lname'];
					$_SESSION['position']=$data['position'];
					header("location:manage.php");
				}
				elseif($_SESSION['position']=$data['position']=='Manager')
				{
					$_SESSION['id']=$data['id'];
					$_SESSION['fname']=$data['fname'];
					$_SESSION['lname']=$data['lname'];
					$_SESSION['position']=$data['position'];
					header("location:managerview.php");
				}
			}
			elseif($data = mysqli_fetch_array($result2))
			{
					$_SESSION['id']=$data['id'];
					$_SESSION['cfname']=$data['cfname'];
					$_SESSION['clname']=$data['clname'];
					$_SESSION['balance']=$data['balance'];
					$_SESSION['accountNumber']=$data['accountNumber'];
					$_SESSION['cardNumber']=$data['cardNumber'];
					$_SESSION['expiryDate']=$data['expiryDate'];
					$_SESSION['accountType']=$data['accountType'];
					header("location:customer.php");
			}
			elseif($data51 = mysqli_fetch_array($result51))
			{
				$_SESSION['id']=$data51['id'];
				$_SESSION['adminUser']=$data51['adminUser'];
				$_SESSION['adminPassword']=$data51['adminPassword'];
				header("location:adminview.php");
			}
			else
			{
				header("location:index.php?invalid=The entered email or password is incorrect.");
			}
		}
	}
?>