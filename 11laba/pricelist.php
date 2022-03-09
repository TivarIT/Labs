<!-- Создадим базовый класс price_list, который будет содержать 
свойство $price_list, для хранения массива
конструктор, инициализирующий массив 
абстрактный метод для вывода массива (прайс-листа)-->
<?php
abstract class price_list
{ // базовый класс
    protected $price_list; // прайс-лист
    function __construct($price_list_mess)
    { //конструктор
        $this->price_list = $price_list_mess;
    }
    abstract function __toString(); //функция вывода
};
// Создадим два класса, наследующих базовый класс, 
// но функция вывода в каждом из них будет определена по-своему
class show_price_list extends price_list
{ // для продавца
    function __toString()
    { // описание функции вывода для продавца
        // Будем осуществлять вывод не на web-страницу, а в буфер. 
        ob_start();
?><ol><?php
        foreach ($this->price_list as $index => $val)
            echo "<li>$index $val </li>";
        ?></ol><?php
        $a = ob_get_contents(); // получаем содержимое буфера
        ob_end_clean(); // очищаем буфер
        return $a;
    }
}
class show_edit_price_list extends price_list
{ // для администратора
    function __toString()
    { // описание функции вывода для администратора
        ob_start(); ?>
        <form action="" method="POST">
            <table><?php
                    foreach ($this->price_list as $index => $val)
                        echo "<tr><td>$index</td><td><input type='text' name='$index' 
value='$val'></td></tr> ";
                    ?></table><input type="submit" value="Сохранить" />
        </form><?php
                $a = ob_get_contents();
                ob_end_clean();
                return $a;
            }
        };
                ?>
<?php session_start();
$_SESSION["us_g"] = 3;
$price_list = array("бананы" => "1,5", "помидоры" => "2");
// Определяем тип переменной $price_ block 
// в зависимости от категории пользователя
switch ($_SESSION["us_g"]) {
    case 1:
        $price_block = new show_price_list($price_list);
        break;
    case 2:
        $price_block = new show_edit_price_list($price_list);
        break;
    default:
        $price_block = "ТЕБЕ НЕЛЬЗЯ СМОТРЕТЬ ПРАЙС-ЛИСТ!!!";
};
?>
<!DOCTYPE html>
<html>

<head></head>

<body><? echo $price_block; ?></body>

</html>