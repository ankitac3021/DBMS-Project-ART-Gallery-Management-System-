<?php


require_once('conn.php');
?>



<!DOCTYPE html>
<html>
    <head>
	
	<link rel="stylesheet" type="text/css" href="addition.css"> 
	</head>
	<body>
	
	<form action="up.php" method="POST" >
<table cellpadding="5" class="choice" align="center" cellspacing="20" cellpadding="20">
<tr>
		 <td> <h3><font face="Comic Sans MS" color="black" size="4" class="d1" >ID:</font></h3></td>
		 <td> <input type="text" name="id" placeholder="Enter the ID"  value="" size="20" class="c2" required /> </td>
</tr>
 <tr>
		 <td> <h3><font face="Comic Sans MS" color="black" size="4" class="d1" >Artist Name:</font></h3></td>
		 <td> <input type="text" name="an" placeholder="Enter Artist Name" value="" size="20" class="c2" required /> </td>
 </tr>
 <tr>
		 <td> <h3><font face="Comic Sans MS" color="black" size="4" class="d1" >Selling ID:</font></h3></td>
		 <td> <input type="text" name="sid" placeholder="Enter the Sellind ID" value="" size="20" class="c2" required /> </td>
</tr>
 <tr>
		 <td> <h3><font face="Comic Sans MS" color="black" size="4" class="d1" >Category:</font></h3></td>
		 <td> <input type="text" name="cat" placeholder="Enter the " value="" size="20" class="c2" required /> </td>
</tr>
 <tr>
		 <td> <h3><font face="Comic Sans MS" color="black" size="4" class="d1" >Quantity:</font></h3></td>
		 <td> <input type="text" name="qqty" placeholder="Enter the Quantity" value="" size="20" class="c2" required /> </td>
</tr>
 <tr>
		 <td> <h3><font face="Comic Sans MS" color="black" size="4" class="d1" >Price:</font></h3></td>
		 <td> <input type="text" name="price" placeholder="Enter the Price" value="" size="20" class="c2" required /> </td>
</tr>


</table>
  <div class="sp">
  <input type="submit" value="update" name="up" />
  </div>
</form>


</body>
</html>