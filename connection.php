<?php
	$conn=mysqli_connect('localhost','root','password','bank183');

	if(!$conn)
	{
		die('Please Check Connection'.mysqli_error($conn));
	}
?>