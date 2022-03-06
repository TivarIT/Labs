<head>
    <title>MMM Банк</title>
</head>
<!--Создать PHP-страницу для решения следующей задачи. Банк предлагает три вида вкладов: «30 дней 4 % годовых», 
«90 дней 4,5 % годовых», «150 дней 5 % годовых». Пользователям, имеющим счета в банке, предоставляется бонус в 
размере 0,3 % годовых. Разработать скрипт для расчета суммы начисленных процентов и итоговой суммы к выдаче в 
зависимости от введенной пользователем суммы.-->

<body>
    <form action="" method="POST">
        Размер вклада
        <input type="text" name="contribution">
        <select name="choice">
            <option value="">--Выберите вид вклада--</option>
            <option value="1">30 дней 4 % годовых</option>
            <option value="2">90 дней 4,5 % годовых</option>
            <option value="3">150 дней 5 % годовых</option>
        </select>
        <input type="checkbox" name="bonus">Имеющим счета в банке МММ бонус в размере 0,3 % годовых<br>
        <input type="submit" name="button" value="Расчёт">
    </form>
    <?php
    /*
    Формула для расчета суммы начисленных процентов: P=i/36500*n*M
    Формула для расчета суммы к выдаче: S=(i/36500*n+1) *M
    Где S – сумма к выдаче, P – сумма начисленных процентов, i – ставка (% годовых), 
    n – количество дней вклада, M – сумма вклада.
    */
    if (isset($_POST['button'])) {
        if (!empty($_POST['choice'])) {
            $selected = $_POST['choice'];
            if (isset($_POST['bonus'])) {
                switch ($selected) {
                    case '1':
                        $P = round(0.043 / 36500 * 30 * $_POST['contribution'], 3);
                        $S = round((0.043 / 36500 * 30 + 1) * $_POST['contribution'], 3);
                        echo "Сумма начисленных процентов: " . $P . "%";
                        echo "Сумма к выдаче: " . $S . "$";
                        break;
                    case '2':
                        $P = round(0.048 / 36500 * 90 * $_POST['contribution'], 3);
                        $S = round((0.048 / 36500 * 90 + 1) * $_POST['contribution'], 3);
                        echo "Сумма начисленных процентов: " . $P . "%";
                        echo "Сумма к выдаче: " . $S . "$";
                        break;
                    case '3':
                        $P = round(0.053 / 36500 * 150 * $_POST['contribution'], 3);
                        $S = round((0.053 / 36500 * 150 + 1) * $_POST['contribution'], 3);
                        echo "Сумма начисленных процентов: " . $P . "%";
                        echo "Сумма к выдаче: " . $S . "$";
                        break;
                }
            }
            if (!isset($_POST['bonus'])) {
                switch ($selected) {
                    case '1':
                        $P = round(0.04 / 36500 * 30 * $_POST['contribution'], 3);
                        $S = round((0.04 / 36500 * 30 + 1) * $_POST['contribution'], 3);
                        echo "Сумма начисленных процентов: " . $P . "%";
                        echo "Сумма к выдаче: " . $S . "$";
                        break;
                    case '2':
                        $P = round(0.045 / 36500 * 90 * $_POST['contribution'], 3);
                        $S = round((0.045 / 36500 * 90 + 1) * $_POST['contribution'], 3);
                        echo "Сумма начисленных процентов: " . $P . "%";
                        echo "Сумма к выдаче: " . $S . "$";
                        break;
                    case '3':
                        $P = round(0.05 / 36500 * 150 * $_POST['contribution'], 3);
                        $S = round((0.05 / 36500 * 150 + 1) * $_POST['contribution'], 3);
                        echo "Сумма начисленных процентов: " . $P . "%";
                        echo "Сумма к выдаче: " . $S . "$";
                        break;
                }
            }
        } else {
            echo 'Please select the value.';
        }
    }
?>