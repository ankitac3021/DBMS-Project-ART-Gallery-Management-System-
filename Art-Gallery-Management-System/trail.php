<?php

$page="arts";
	$title="Arts";
	require_once('header.php');

?>

	
	
	
	
	<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="trail.css"> 
	</head>
	<body>
	<div class="container-fluid">
		  <div class="row art_inner">
			<div class="col-md-9">
                <div class="panel panel-default">
				  <div class="panel-heading"></div>
                  <div class="panel-body">
                    <p class="about_us_info">
                  
    <div class="pp">
	<table cellpadding="5" class="choice" align="center" cellspacing="50" cellpadding="20">
	<tr>
	<?php  
	$query="select * from slider where cat='water color'";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	while($s=mysqli_fetch_assoc($result))
	{
	$id=$s['sell_id'];
	echo "<img src=".$s['path']." height='240px' width='450px'>
			<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> Drawn by ".$s['artist_nm']." <br> Pieces available: ".$s['qty']."</font></h3> <a href='addqtyval.php?id=$id'>ADD TO CART</a><br><br><br>";
	}
?>	
			</tr>
	 </table>
	 </div>
						 
						 
						 
						 
                    </p>
                  </div>
                </div>
                </div>
            <?php
				require('right_side_cart.php');
			?> 
		  </div>
		  
		  
		      </body>
</html>
		  
		  
		  
<?php
	require('footer.php');
?>