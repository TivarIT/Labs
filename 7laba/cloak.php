<html>
<!--Создать функциональный элемент, который будет выводить на экран приветствие в зависимости 
от времени суток на компьютере пользователя.-->
<head>
    <title>Часы</title>
    <script>
        function clock() { // часы
            date = new Date(); //функция установки текущей даты
            hour = date.getHours(); //определяем сколько часов
            minute = date.getMinutes();
            second = date.getSeconds();
            time = hour + ":" + minute + ":" + second; //формируем текущее время
            document.getElementById("fieldTime").value = time;
            if (hour > 4 || hour < 12) {
                document.getElementById("greetingsTime").value = "Доброе утро!";
            }
            if (hour > 12 || hour < 18) {
                document.getElementById("greetingsTime").value = "Добрый день!";
            }
            if (hour > 18 || hour < 24) {
                document.getElementById("greetingsTime").value = "Добрый вечер!";
            }
            if (hour > 24 || hour < 4) {
                document.getElementById("greetingsTime").value = "ИДИ СПАТЬ, ЧЁРТ!";
            }   
            setTimeout("clock();",1000);
        }
    </script>
</head>
<body onload="clock()">
    <input type="text" size=8 id="fieldTime" disabled>
    <input type="text" id="greetingsTime" disabled>
</body>
</html>