<?php
if (isset($_POST['name'])) {
    $mysqli = new mysqli('localhost', 'Nadiya', '270183', 'users');

    if (mysqli_connect_errno()) {
        echo 'Something went wrong, please, try again later';
        exit;
    };
    $name = $_POST['name'];
    $lastName = $_POST['last_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $hobby = $_POST['hobby'];
    $userName = $_POST['user_name'];
    $password = $_POST['password'];
    $password = md5($password);
    $birthday = $_POST['birthday'];
    $bankAccount = $_POST['bank_account'];
    $about = $_POST['about'];
    $interest = $_POST['interest'];
    $mysqli->query("INSERT INTO `users info`(`name`, `last_name`, `age`, `sex`, `hobby`, `user_name`, `password`, `birthday`, `bank_account`, `about`, `interest`) VALUES ('$name', '$lastName', '$age', '$sex', '$hobby', '$userName', '$password', '$birthday', '$bankAccount', '$about', '$interest')");
    $mysqli->close();
    header('Location: http://home13/registerSuccess.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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
    <form action="register.php" id="login" name="login" method="post">
        <ul>
            <li><input type="text" name="name" placeholder="name" required="required"></li>
            <li><input type="text" name="last_name" placeholder="last name" required="required"></li>
            <li><input type="text" name="age" placeholder="age"></li>
            <li><input type="text" name="sex" placeholder="sex" required="required"></li>
            <li><input type="text" name="user_name" placeholder="login" required="required"></li>
            <li><input type="password" name="password" placeholder="password" required="required"></li>
            <li><input type="text" name="birthday" placeholder="birthday"></li>
            <li><input type="text" name="bank_account" placeholder="bank account"></li>
            <li>
                <label for="hobby">hobby:</label>
                <select name="hobby" id="hobby">
                    <option value="empty"></option>
                    <option value="sport">sport</option>
                    <option value="books">reading books</option>
                    <option value="films">watching films</option>
                    <option value="travell">travelling</option>
                    <option value="games">playing video games</option>
                </select>
            </li>
            <li>
                <label for="interest">interest:</label>
                <select name="interest" id="interest">
                    <option value="empty"></option>
                    <option value="art">art</option>
                    <option value="dance">dance</option>
                    <option value="music">music</option>
                    <option value="sport">sport</option>
                    <option value="psychology">psychology</option>
                </select>
            </li>
            <li><textarea name="about" id="about" cols="30" rows="10" placeholder="shortly about yourself"></textarea></li>
            <li class="submit"><input type="submit" name="send" value="Register"></li>
        </ul>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>