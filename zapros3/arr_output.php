<!DOCTYPE html>
<html>
<head>
    <title>Запрос 3</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <h2>Результаты запроса 3</h2>

        <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>Номер врача</td>
                    <td>Ф. И. О. врача</td>
                    <td>Паспортные данные</td>
                    <td>Адрес</td>
                    <td>Год рождения</td>
                    <td>Специальность</td>
                    <td>Дата поступления на работу</td>
                    <td>Дата увольнения</td>
                    <td>Номер отделения</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Doc_id']; ?></td>
                        <td><?php echo $row['Doc_family']; ?></td>
                        <td><?php echo $row['Doc_passport']; ?></td>
                        <td><?php echo $row['Doc_address']; ?></td>
                        <td><?php echo $row['Doc_birth_year']; ?></td>
                        <td><?php echo $row['Doc_speciality']; ?></td>
                        <td><?php echo $row['Doc_enroll_date']; ?></td>
                        <td><?php echo $row['Doc_dismiss_date']; ?></td>
                        <td><?php echo $row['DocDep_id']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="out_btn">В меню</a>
        <a href="?out" class="out_btn" name="out">Выход</a>
    </div>


</body>
</html>