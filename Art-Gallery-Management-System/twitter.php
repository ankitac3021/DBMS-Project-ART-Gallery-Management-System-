<?php
	$page="arts";
	$title="Arts";
	require_once('header.php');
	
?>	
<!DOCTYPE html>
<html>
    <head>
        
           <link rel="stylesheet" href="twitter.css">
        
    </head>
	<body>
	        <div class="c1">
			<h3> <font  face="Comic Sans MS" color="white" size="6" >  We are available on Twitter </font><h3>
			<?php
				$query="select * from social_media";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$link=mysqli_fetch_assoc($result);
				 ?>
		    <h3> <font face="Comic Sans MS" color="white" size="6" >  Search us on <?php echo $link["twitter"] ?> </font><h3>
			
	</body>
</html>