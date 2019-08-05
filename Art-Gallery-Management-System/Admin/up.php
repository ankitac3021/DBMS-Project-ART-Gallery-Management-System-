<?php


require_once('conn.php');

				$i = $_POST['id'];
				$u = $_POST['an'];
				$s = $_POST['sid'];
				$c = $_POST['cat'];
				$q = $_POST['qqty'];
				$pri = $_POST['price'];
				
                $query="update slider set artist_nm='$u',sell_id='$s',cat='$c',qty='$q',price='$pri' where id='$i'";
				mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));

                include("tp.php");



?>

