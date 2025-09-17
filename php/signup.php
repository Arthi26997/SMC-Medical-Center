<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="/css/php-style.css">
</head>
<body>

	<form action="register.php" method="post">
		<h2>Sign Up</h2>

		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

		<?php if (isset($_GET['success'])) { ?>
			<p class="success"><?php echo $_GET['success']; ?></p>
		<?php } ?>

		<label>Name</label>
		<input type="text" name="name" placeholder="Full name"><br>

		<label>Username</label>
		<input type="text" name="uname" placeholder="Username" pattern="smc(0[1-9]|[1-3][0-9]|40)" required><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<label>Re-enter Password</label>
		<input type="password" name="re_password" placeholder="Confirm Password"><br>

		<button type="submit">Sign Up</button>
		<p>Already have an account? <a href="index.php">Login here</a></p>
	</form>

</body>
</html>
