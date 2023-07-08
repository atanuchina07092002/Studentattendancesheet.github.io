<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style_r.css">
</head>
<body style="background-image:url('img/images.jpeg')">
  <div class="header">
  	<h2>Login</h2>
  </div>
<div class="form_o">
	<form method="post" action="login_s.php" class="form_s">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register_s.php">Sign up</a>
  	</p>
  </form>
</div>	 
  
</body>
</html>