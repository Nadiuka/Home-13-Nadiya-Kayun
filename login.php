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
    <?php
    $mysqli = new mysqli("localhost", "user", "password", "world");

    if (mysqli_connect_errno()) {
        printf("Подключение невозможно: %s\n", mysqli_connect_error());
        exit();
    }

    /* Подготовленное выражение */
    if ($stmt = $mysqli->prepare("SELECT Code, Name FROM Country WHERE Code LIKE ? LIMIT 5")) {

        $stmt->bind_param("s", $code);
        $code = "C%";

        $stmt->execute();

        /* Объявление переменных для заготовленного выражения*/
        $stmt->bind_result($col1, $col2);

        /* Выборка значений */
        while ($stmt->fetch()) {
            printf("%s %s\n", $col1, $col2);
        }

        /* Закрытие выражения */
        $stmt->close();
    }
    /* Закрытие подключение */
    $mysqli->close();

    ?>
    <form action="#" id="login" name="login" method="post">
        <ul>
            <li><input type="text" name="user name" placeholder="login"></li>
            <li><input type="password" name="password" placeholder="password"></li>
            <li><input type="submit" name="submit" value="login"></li>
        </ul>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>