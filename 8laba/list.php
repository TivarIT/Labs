<head>
    <title>Список</title>
</head>
<!--Задан массив согласно варианту. Вывести значения (не более 20) в виде маркированного нумерованного (варианты 1,3,5,7,9) 
и ненумерованного (варианты 2,4,6,8,10) списка. Вариант2: князья ВКЛ-->
<body>
    <?php $x = array("Ольгерд", "Ви́товт", "Свидрига́йло", "Гедими́н");
    echo "<ul>";
    for ($i = 0; $i < count($x); $i++) {
        echo "<li>" . $x[$i] . "</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>