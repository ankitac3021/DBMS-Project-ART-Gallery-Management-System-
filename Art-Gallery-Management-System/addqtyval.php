<?php

require_once('Admin/conn.php');
	$sellid = $_GET['id'];
	$query="select qty from slider where sell_id='$sellid'";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	while($row=mysqli_fetch_assoc($result))
	{
		$id1=(int) $row["qty"];
		if($id1>0)
		{
			include("addqty.php");
		
		}
		else
		{
			include("errrr.php");
			break;
		}
	}
	
?>