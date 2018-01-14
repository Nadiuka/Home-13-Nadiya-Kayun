<?php
$isLoggedIn = false;
if (isset($_POST['user_name'])) {
    $mysqli = new mysqli('localhost', 'Nadiya', '270183', 'users');

    if (mysqli_connect_errno()) {
        echo 'Something went wrong, please, try again later';
        exit();
    }
    $userName = $_POST['user_name'];
    $password = $_POST['password'];
    $password = md5($password);
    $result = $mysqli->query("SELECT * FROM `users info` WHERE `user_name` = '$userName' AND `password` = '$password'");
    $user = $result->fetch_array();
    if ($user) {
        $isLoggedIn = true;
    } else {
        $isLoggedIn = false;
    }
    $result->close();
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrapper">
    <nav>
        <ul class="clearfix">
            <li  class="home-page"><a href="/">Home</a></li>
            <li><a href="/register.php">Register</a></li>
            <li><a href="/login.php">Login</a></li>
        </ul>
    </nav>
    <?php
    if (isset($_POST['user_name'])) {
        if ($isLoggedIn) {
            ?>
            <div class="success">Welcome</div>
            <?php
        } else {
            ?>
            <div class="error">Wrong login or password</div>
            <?php
        }
    }
    ?>
    <form action="login.php" id="login" name="login" method="post">
        <ul>
            <li><input type="text" name="user_name" placeholder="login"></li>
            <li><input type="password" name="password" placeholder="password"></li>
            <li class="submit"><input type="submit" name="submit" value="login"></li>
        </ul>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>