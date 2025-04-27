<?php 
    include('function.php');
    if(empty($_SESSION['uid'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/style/theme.css">
</head>
<body>
    <div class="content-login">
        <form method="post" enctype="multipart/form-data">
            <p class="message"><?php echo userRegister(); ?></p>
            <label>Username</label>
            <input type="text" class="box" name="name">
            <label>Email</label>
            <input type="text" class="box" name="email">
            <label>Password</label>
            <input type="password" class="box" name="password">
            <label>Profile</label>
            <input type="file" class="box" name="profile">
            <div class="wrap-btn">
                <a href="login.php" class="btn">Back To Login</a>&ensp;
                <input type="submit" class="btn" name="btn-register" value="SIGN UP">
            </div>
        </form>
    </div>
</body>
</html>
<?php
    }
    else {
        header('location: index.php');
    }
?>