<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="login.css"> 
		<div class="a1">
	  <h3><font color="RED" size="6" face="Comic Sans MS" class="d1" >WELCOME TO THE ART GALLERY</font></h3>
	  </div>
    </head>
    <body>
	
	<form action="validation.php" method="POST" >
  <div class="imgcontainer">
    <img src="icon.jpg" alt="Avatar" class="avatar">
  </div> 

  <div class="container">
    <label for="uname"><b><font face="Comic Sans MS" size="5" color="yellow">User name</font></b></label>
    <input type="text" placeholder="Enter Username" name="uname1" required pattern="[a-zA-Z]*">

    <label for="psw"><b><font size="5" face="Comic Sans MS" color="yellow">Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
	
  </div>
  <div class="trii">
    <button type="submit">Login</button>
	</div>
	<div class="text1">
	<a href="signup.php"> <font face="Comic Sans MS" size="6"  class="container">  Dont have an account? Sign Up </font> </a>
	</div>

	
  
</form>
	</body>
</html>