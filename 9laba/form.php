<head>
    <title>Пример передачи данных</title>
</head>
<!--Передача данных-->
<body>
    <form action="" method="POST">
        Ваше имя <input type="text" name="name"><br>
        Ваша фамилия <input type="text" name="surname"><br>
        <input type="checkbox" name="version">расширенная версия<br>
        <input type="submit" name="button" value="Да! ">
    </form>
    <?php
    if (isset($_POST["button"])) { // если нажали на кнопку с именем button
        echo "Поздравляю, " . $_POST['name'] . " " . $_POST['surname'] . ",<br>
скрипт, передающий данные из формы, заработал! ";
        if (isset($_POST["version"])) echo "Выбрана расширенная версия.";
    }
?>