<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
	<title>Запрос 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="img"></div>
    <div class="container">
        <h2>Результаты запроса 6</h2>

        <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>Фамилия врача</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Doc_family']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="out_btn">В меню</a>
        <a href="?out" class="out_btn" name="out">Выход</a>
    </div>


</body>
</html>