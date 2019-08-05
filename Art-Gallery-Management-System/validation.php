<?php

require_once('Admin/conn.php');
	
	$query="select * from user_reg";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	$uname = $_POST['uname1'];
	$pasw = $_POST['pass'];
	$ct=0;
	
		if(mysqli_num_rows($result)>0)
		{
			while($chk = mysqli_fetch_assoc($result))
			{
				if($uname == $chk['fname'] && $pasw == $chk['password'])
				{
					$ct++;
					
				}
			}
				if($ct>=1)
				{
					include("index.php");
				}
				else
				{
					include("error1.php");	
				}
		}		
		
		
	
?>