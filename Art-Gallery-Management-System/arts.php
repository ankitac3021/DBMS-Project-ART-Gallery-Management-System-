<?php
	$page="arts";
	$title="Arts";
	require_once('header.php');
	
?>	

<!DOCTYPE html>
<html>
    <head>
        
            <link rel="stylesheet" href="historic.css">
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
						 <table cellpadding="5" class="choice" align="center" cellspacing="110" cellpadding="100">
            <tr>
                <td>
				<?php
				$query="select * from images where image_id=1";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']." </font></h3>";
				
							?>
							
                    </a>
                </td>
			</tr>
			<tr>
                <td>
				    <?php
				$query="select * from images where image_id=2";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']." </font></h3>";
				
							?>
							
                    </a>
				
                </td>
            </tr>
            <tr>
                    <td>
					
                        <?php
				$query="select * from images where image_id=3";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
						
						
                    </td>
					</tr>
					<tr>
                    <td>
					
					
					
                        <?php
				$query="select * from images where image_id=4";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
						
						
                    </td>
            </tr>
            <tr>
			
			
                    <td>
                        <?php
				$query="select * from images where image_id=5";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
                    </td>
					
					</tr>
			<tr>
					
                    <td>
					
					
					
                        <?php
				$query="select * from images where image_id=6";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
						
						
                    </td>
            </tr>
            <tr>
                    <td>
                        <?php
				$query="select * from images where image_id=7";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
                    </td>
					</tr>
			<tr>
                    <td>
                        <?php
				$query="select * from images where image_id=8";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
                    </td>
            </tr>
             <tr>
                    <td>
                        <?php
				$query="select * from images where image_id=9";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
                    </td>
					
					</tr>
			<tr>
                    <td>
                        <?php
				$query="select * from images where image_id=10";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);
				
				
                    echo "<a href='".$imag["link"]."'>
                   		<img src=".$imag["url"]." height='240px' width='450px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>ART Id: ".$imag['art_id']."  </font></h3>";
				
							?>
							
                    </a>
                    </td>
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