<?php

$page="arts";
	$title="Arts";
	require_once('header.php');
?>
	<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="trail.css"> 
	<link rel="stylesheet" type="text/css" href="a.css">
	</head>
	<body>
	
	<div class="container-fluid">
		  <div class="row art_inner">
			<div class="col-md-9">
                <div class="panel panel-default">
				  <div class="panel-heading"></div>
                  <div class="panel-body">
                    <p class="about_us_info">
					<form action="addtocart.php?id=<?php echo($_GET['id']);?>" method="POST" >
					<div class="container">
    <label for="uname"><b><font face="Comic Sans MS" size="5" color="black">Add Quantity</font></b></label>
    <input type="text" placeholder="Enter the Quantity" name="qt" required>
	</div>
	          
				  <div class="trii">
    <button type="submit">Add</button>
	</div>
  </form>	
					
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