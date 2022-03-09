<!--Форма для авторизации хранится в файле admin.html. Данные из формы обрабатываются скриптом access.php. В случае успешной 
    авторизации происходит перенаправление на файл index.php ( index.php работает только, если пользователь авторизовался).-->
<?php
function authorize($login, $psw)
{
    if ($login == "l" && $psw == "p") return 1;
    else return 0;
}
session_start();
if ($_POST['submit']) {
    if (authorize($_POST['login'], $_POST['psw'])) {
        $_SESSION['user_id'] = 1;
        // если авторизовался, переходим на основной модуль
        echo "<html><head><META HTTP–EQUIV='Refresh' 
CONTENT ='0'; URL='http://localhost:3000/10laba/example/index.php'> 
</head> </html>";
    } else {
        echo "Неверный пароль";
    }
}
?>