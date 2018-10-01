<?php include('adminServer.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header" style="background-color: #0BA9F9">
    <h2>Admin Login</h2>
</div>

<form method="post" action="adminlogin.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Admin Name</label>
        <input type="text" name="adminName" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_admin">Login</button>
    </div>

</form>
</body>
</html>