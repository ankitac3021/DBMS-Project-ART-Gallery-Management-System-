<?php

require_once('Admin/conn.php');

     $selid = $_GET['id'];
	 
	 $quer="select * from cart";
	 $res=mysqli_query($link,$quer) or die("Error fetching data.".mysqli_error($link));
	 $cap=mysqli_fetch_assoc($res);
	 $q = $cap['qty'];

	$query="delete from cart where sellid='$selid'";
	$query1="update slider set qty=qty+'$q' where sell_id='$selid'";
	
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
	
	include("cart.php");
	
	?>