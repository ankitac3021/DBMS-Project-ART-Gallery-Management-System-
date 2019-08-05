<!DOCTYPE html>

<?php

	require_once('Admin/conn.php');
	
	$query="select * from social_media where uid=1";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	$socialdetails=mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	$form_msg="";
	if(isset($_POST['registerClick']))
	{
		$fnm=trim($_POST['fnm']);
		$lnm=trim($_POST['lnm']);
		$gender=trim($_POST['gender']);
		$contact=trim($_POST['contact']);
		$email=trim($_POST['email']);
		$pwd=trim($_POST['pwd']);
		$dbpass=password_hash($pwd, PASSWORD_DEFAULT);
		$confirm=trim($_POST['confirmpwd']);
		$add1=trim($_POST['add1']);
		$add2=trim($_POST['add2']);
		$add3=trim($_POST['add3']);
		
		
		if($fnm=="" )
		{
			echo $form_msg="Please enter this field";
		}
		else if($lnm=="")
		{
			echo $form_msg="Please enter this field";
		}
		else if($contact=="")
		{
			echo $form_msg="Please enter this field";
		}
		else if($email=="")
		{
			echo $form_msg="Please enter this field";
		}
		else if($pwd=="")
		{
			echo $form_msg="Please enter this field";
		}
		else if($confirm=="")
		{
			echo $form_msg="Please enter this field";
		}
		else
		{
			if($pwd!=$confirm)
			{
				echo $form_msg="Set password and Confirm Password must be same.";
			}
			else
			{
			$query="insert into user_reg (fname,lname,gender,contact,email,password,add1,add2,add3) value('$fnm','$lnm','$gender','$contact','$email','$dbpass','$add1','$add2','$add3')";
				mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
				echo "success";
			}
		}
		
		
	}
	
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Gallery | <?php echo $title; ?></title>
    <link href="images/icon.png" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="signup.css"> 
	
  </head>
  <body>
  
	                
		  
						<h3><b><font face="Comic Sans MS" size="5" color="white" class="c1">Sign Up</font><h3>
			
					<div class="panel-body">
					 <form class="form-horizontal" role="form" id="register" method="post">
					  <div class="form-group">
						<label class="control-label col-sm-3" for="FirstName">First Name</label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="fnm" placeholder="Enter First Name">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="LastName">Last Name</label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="lnm" placeholder="Enter Last Name">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="LastName">Gender</label>
						<div class="col-sm-8">
							<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
							<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3" for="ContactNo">Contact No</label>
						<div class="col-sm-8">
						  <input type="number" class="form-control" name="contact" placeholder="Enter Contact No">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="email">Email</label>
						<div class="col-sm-8">
						  <input type="email" class="form-control" name="email" placeholder="Enter email">
						</div>
					  <div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3" for="pwd">Set Password</label>
						<div class="col-sm-8"> 
						  <input type="password" class="form-control" name="pwd" placeholder="Enter password">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3" for="conpwd">Confirm Password</label>
						<div class="col-sm-8"> 
						  <input type="password" class="form-control" name="confirmpwd" placeholder="Enter confirm password">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
						  </div>
						
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err" style="display:none">Set password and Confirm Password must be same.</label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="address">Address</label>
						<div class="col-sm-8"> 
						  <input type="text" class="form-control" name="add1" placeholder="Address 1">
                          <input type="text" class="form-control" name="add2" placeholder="Address 2">
                          <input type="text" class="form-control" name="add3" placeholder="Address 3 (Optional)">
						</div>
					  </div>
					  <div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
						  <button type="submit" name="registerClick" id="registerClick" class="btn btn-primary">Submit</button>
						  
						   <a href="login.php"><font color="white" > Back </font> </a> 
						</div>
					  </div>
					</form>
				</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	</body>
	</html>
	
	