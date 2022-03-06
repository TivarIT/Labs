<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter);
echo "Вы посетили наш сайт " . $counter . " раз!";
?>
<!DOCTYPE html>
<!--Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 
'Вы посетили наш сайт % раз!'.-->
<html>
<head>
    <title>Счётчик</title>
</head>
</html>