<!DOCTYPE html>
<html>
<head>
    <title>Запрос 1</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <h2>Результаты запроса 1</h2>

        <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>ID врача</td>
                    <td>Фамилия врача</td>
                    <td>Количество пациентов</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Doc_id']; ?></td>
                        <td><?php echo $row['Doc_family']; ?></td>
                        <td><?php echo $row['pat_count']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="out_btn">В меню</a>
        <a href="?out" class="out_btn" name="out">Выход</a>
    </div>


</body>
</html>