<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
	<title>Курсовая</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="img"></div>
    <div class="container">
        <?php
            if (isset($output)) {
                echo $output . "\n\r";
            } else {
                echo "Ошибка\n\r";
            }
        ?>
        <br>

        <?php if (isset($nav_buttons)) { ?>
            <a href="../menu/menu.php" class="out_btn">В меню</a>
            <a href="?out" class="out_btn" name="out">Выход</a>
        <?php } ?>
    </div>
</body>
</html>
