<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Loing</title>
	<link rel="stylesheet" href="/Public/admin/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>

<body>
    <!-- <h1>QiuBlog Login</h1> -->
    <div class="container w3">
        <h2>Login Now</h2>
		<form action="" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" id="username" name="username" class="name" placeholder="Username">
				<div class="clear"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" id="password" class="password" placeholder="Password">
				<div class="clear"></div>
			</div>

			<div class="password-agileits">
				<span class="username">Verify:</span>
				<input type="text" name="verify" id="verify" class="password" placeholder="Verification">
				<div class="clear"></div>
			</div>

			<div class="rem-for-agile">
				<img style="cursor:pointer;" src="/index.php/admin/login/verify" onclick="this.src='/index.php/admin/login/verify/'+Math.random();">
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Login">
				    <input type="reset" value="Reset">
			</div>
			<div class="clear"></div>
		</form>
	</div>
</body>
</html>