<?php
	$page="cart";
	$title="Cart";
	require_once('header.php');
	
?>

<head>
		<link rel="stylesheet" type="text/css" href="a.css">
</head>

	  <link rel="stylesheet" href="popp.css">
      <div class="container-fluid cart-container">
				<div class="panel panel-default">
				  <div class="panel-heading">Cart</div>
				  <div class="panel-body">
					<table class="table cart_table" align="center">
					  <tr style="font-weight:bolder">
						<td></td>
						<td></td>
						<td>Product</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
					  </tr>
					  
				 <?php
						$total=0;
					  $query="select * from cart";
					  $result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
					  while($s=mysqli_fetch_assoc($result))
					  {
						 $sellid = $s['sellid'];
						 
						 
						 $queryin="select * from slider where sell_id='$sellid'";
						 $resultin=mysqli_query($link,$queryin) or die("Error fetching data.".mysqli_error($link));
						 
						 while($in=mysqli_fetch_assoc($resultin))
						{
							$q=$s['qty'];
							$p=$in['price'];
							$tot=$q*$p;
							echo "<tr><td> <a href='del.php?id=$sellid'> <img src='del.png' height='30px' width='30px'> </a></td> <td><img src=".$in['path']." class='my_cart_items'/></td><td><p> ".$in['cat']." </p></td> <td><p> ".$in['price']." </p></td><td> <p> ".$s['qty']."</p></td><td>$tot</td></tr>";
						   $total=($total+$tot);
						}
					  }
					  
					  
				 ?>
					  
					</table>
					<?php
					
					echo "<h3 align='center' style='font-weight:bolder'> The Total Price is :$total</h3>";
					?>

					<form action="payment.php" method="POST" >
					<div class="trii">
					<button type="submit"><p><font size="4"><B>Proceed to Pay </font><B></p></button>
					</div>
					</form>
					
				  </div>
				</div>	
      </div>
			
		 
		  

	
<?php
	require('footer.php');
?>