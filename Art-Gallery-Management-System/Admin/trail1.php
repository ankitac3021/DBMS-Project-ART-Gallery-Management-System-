<?php


require_once('Admin/conn.php');
?>

	
	
	
	
	<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
	<?php  
	$query="select * from slider";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	while($s=mysqli_fetch_assoc($result))
	{
	
	echo "<img src=".$s['path']." height='220px' width='400px'>
			<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$s['img_nm']." </font></h3>" ; 
			
	}
?>	
	</body>
</html>
