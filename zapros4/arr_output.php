<!DOCTYPE html>
<html>
<head>
    <title>Запрос 4</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <h2>Результаты запроса 4</h2>

        <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>Номер пациента</td>
                    <td>Паспортные данные</td>
                    <td>Адрес</td>
                    <td>Дата рождения</td>
                    <td>Дата поступления</td>
                    <td>Дата выписки</td>
                    <td>Диагноз</td>
                    <td>Номер палаты</td>
                    <td>Номер врача</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['P_id']; ?></td>
                        <td><?php echo $row['P_passport']; ?></td>
                        <td><?php echo $row['P_address']; ?></td>
                        <td><?php echo $row['P_birth']; ?></td>
                        <td><?php echo $row['P_incoming_date']; ?></td>
                        <td><?php echo $row['P_outcoming_date']; ?></td>
                        <td><?php echo $row['P_diagnosis']; ?></td>
                        <td><?php echo $row['PR_id']; ?></td>
                        <td><?php echo $row['PDoc_id']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="out_btn">В меню</a>
        <a href="?out" class="out_btn" name="out">Выход</a>
    </div>

</body>
</html>