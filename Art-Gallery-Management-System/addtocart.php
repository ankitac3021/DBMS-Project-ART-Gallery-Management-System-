<?php

require_once('Admin/conn.php');
	$sellid = $_GET['id'];
	$q=$_POST['qt'];
	$q1=(int)$q;
	
	
	$query4="select * from slider where sell_id='$sellid'";
	$result4=mysqli_query($link,$query4) or die("Error fetching data.".mysqli_error($link));
	while($row=mysqli_fetch_assoc($result4))
	{
		$id1=(int) $row["qty"];
		if($q1<$id1)
		{
	
	
	$query="insert into cart values('$sellid','$q')";
	$query1="update slider set qty=qty-'$q' where sell_id='$sellid'";
	$query2="select cat from slider where sell_id='$sellid'";
	
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
	$result2=mysqli_query($link,$query2) or die("Error fetching data.".mysqli_error($link));
	
	
	while($catt=mysqli_fetch_assoc($result2))
	{	
		$cat = $catt['cat'];
		if($cat == "oil pastel")
		{
			include("oil.php");	
		}
		else if($cat == "sketch")
		{
			include("sketch.php");	
		}
		else if($cat == "water color")
		{
			include("trail.php");	
		}
		else
		{
			echo"error";
		}
	}
  }
  else{
	  include("errr.php");
			break;
  }
}
?>