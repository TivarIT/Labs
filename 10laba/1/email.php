<?php
if (!empty($_REQUEST['email'])) {
    setcookie('email', $_REQUEST['email'], time() + 3600, '/');
}
?>
<!DOCTYPE html>
<html>
<!--Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) 
при ее открытии поле email было автоматически заполнено. -->
<head>
    <title>Email</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="email">
        <input type="submit">
    </form>
</body>

</html>