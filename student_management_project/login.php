<?php include("header.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body >
<div class="center">
<h1>Login</h1>
<form action="" method="post">
    <div class="text-field">
        <input type="text"  id="text"required>
        <span></span>
        <label>Username</label>
    </div>
    <div class="text-field">
        <input type="password" id="pass"required>
        <span></span>
        <label>Password</label>
    </div>
    <div class="pass">Forgot Password?</div>
    <input type="submit" value="Login" onclick="rest()">
    <div class="signup-link">
        Not a Member? <a href="#">Signup</a>
    </div>
</form>
</div>
</body>
</html>