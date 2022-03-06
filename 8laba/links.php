<head>
    <title>Ссылки</title>
</head>
<!--Создать функцию, которая формирует и выводит на экран меню. Входные данные – последовательности названий пунктов 
и соответствующих им URL. Использовать функцию в скрипте, для вывода меню.-->
<body>
    <?php $pagesname = array('YouTube', 'Yandex', 'Twitch');
    $pagesurl = array('https://www.youtube.com', 'https://yandex.by', 'https://www.twitch.tv');
    echo "<table border=1> <tr><td>Page name</td><td>URL</td></tr>";
    for ($i = 0; $i < count($pagesname); $i++) {
        echo "<tr><td>" . $pagesname[$i] . "</td><td>" . "<a href= " . $pagesurl[$i] . ">" . $pagesurl[$i] . "</a></td></tr>";
    }
    echo "</table>";
    ?>
</body>