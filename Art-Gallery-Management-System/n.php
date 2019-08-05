				<?php
				$link=mysqli_connect("localhost","root","","art_gallery");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
				$query="select * from images where image_id=1";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				while($imag = mysqli_fetch_assoc($result))
				{
					echo($imag["url"]);
				}
				?>