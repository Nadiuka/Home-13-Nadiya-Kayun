<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div>
    <form action="#" id="login" name="login" method="post">
        <ul>
            <li><input type="text" name="name" placeholder="name" required="required"></li>
            <li><input type="text" name="last name" placeholder="last name" required="required"></li>
            <li><input type="text" name="age" placeholder="age"></li>
            <li><input type="text" name="sex" placeholder="sex" required="required"></li>
            <li><input type="text" name="user name" placeholder="login" required="required"></li>
            <li><input type="password" name="password" placeholder="password" required="required"></li>
            <li><input type="text" name="birth" placeholder="birthday"></li>
            <li><input type="text" name="account" placeholder="bank account"></li>
            <li>
                <select name="hobby" id="hobby" multiple="multiple">
                    <option value="sport">sport</option>
                    <option value="books">reading books</option>
                    <option value="films">watching films</option>
                    <option value="travell">travelling</option>
                    <option value="games">playing video games</option>
                </select>
            </li>
            <li><textarea name="about" id="about" cols="30" rows="10" placeholder="shortly about yourself"></textarea></li>
            <li>
                <select name="interest" id="interest" multiple="multiple">
                    <option value="art">art</option>
                    <option value="dance">dance</option>
                    <option value="music">music</option>
                    <option value="sport">sport</option>
                    <option value="psychology">psychology</option>
                </select>
            </li>
            <li><input type="submit" name="send" value="registrate"></li>
        </ul>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>