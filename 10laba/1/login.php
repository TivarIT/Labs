<!DOCTYPE html>
<html>
<!--Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) 
при ее открытии поле email было автоматически заполнено. -->
<head>
    <title>Login</title>
</head>

<body>
    <?php
    if (!empty($_COOKIE['email']))
        $email = $_COOKIE['email'];
    else
        $email = '';
    ?> <form action="" method="GET">
        <table>
        <tr>
            <td></td>
            <td>Авторизация</td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <td>Имя</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Фамилия</td>
            <td><input type="password" name="psw"></td>
        </tr>
        <tr>
            <td>Пароль</td>
            <td><input type="password" name="psw"></td>
        </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Войти"></td>
        </tr>
    </table>
    </form>
</body>