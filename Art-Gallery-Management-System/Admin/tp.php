<?php


require_once('conn.php');
?>

	
	
	
	
	<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="tp.css"> 
	</head>
	<body>
	
	<div class="p1">
	<?php  
	$query="select * from slider";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	while($s=mysqli_fetch_assoc($result))
	{
	
	echo " 
			<h3 class='c1'><font align='center' face='Comic Sans MS'color='blue' size='5'> Name: ".$s['img_nm']." |||| ID:".$s['id']." |||| Artist Name:".$s['artist_nm']."||||  Sell Id:".$s['sell_id']."</font></h3>" ; 
			
	}
?>	

  <a href="addition.php"><font face="Comic Sans MS" size="6" > Add Data <br> </font> </a>
  <a href="adminHome.php"><font face="Comic Sans MS" size="6" > Go to Main Page </font> </a>
  </div>
	</body>
</html>
