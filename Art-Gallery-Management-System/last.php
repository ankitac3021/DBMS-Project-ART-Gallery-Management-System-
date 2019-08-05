<?php

require_once('Admin/conn.php');

    $query4="delete from cart";
	$result4=mysqli_query($link,$query4) or die("Error fetching data.".mysqli_error($link));  
    include("done.php");
	
?>