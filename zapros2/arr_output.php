<!DOCTYPE html>
<html>
<head>
    <title>Запрос 2</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <h2>Результаты запроса 2</h2>

        <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>Номер отделения</td>
                    <td>Название отделения</td>
                    <td>Ф. И. О. заведующего</td>
                    <td>Количество мест в отделении</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Dep_id']; ?></td>
                        <td><?php echo $row['Dep_name']; ?></td>
                        <td><?php echo $row['Dep_master_family']; ?></td>
                        <td><?php echo $row['place_count']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="out_btn">В меню</a>
        <a href="?out" class="out_btn" name="out">Выход</a>
    </div>

    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>