<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
	<title>Отчет</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="img"></div>
    <div class="container">
        <h2>Результаты отчета</h2>
        <div class="table_wrap">
            <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>Номер строки</td>
                    <td>Номер отделения</td>
                    <td>Год</td>
                    <td>Месяц</td>
                    <td>Диагноз пациента</td>
                    <td>Количество пациентов</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $row['O_id']; ?></td>
                    <td><?php echo $row['O_dep']; ?></td>
                    <td><?php echo $row['O_year']; ?></td>
                    <td><?php echo $row['O_month']; ?></td>
                    <td><?php echo $row['O_diagn']; ?></td>
                    <td><?php echo $row['O_count']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>

        <a href="../menu/menu.php" class="out_btn">В меню</a>
        <a href="?out" class="out_btn" name="out">Выход</a>
    </div>
</body>
</html>