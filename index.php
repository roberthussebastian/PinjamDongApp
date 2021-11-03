<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h3 class="intro">Welcome in Application. <br>Sign in or sign up to in PinjamDong.</br></h3>
     <form action="login.php" method="post">
     	<h2>Sign In</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button class="btn" type="submit">Sign In</button>
          <a href="signup.php" class="ca">Sign Up</a>
     </form>
</body>
</html>