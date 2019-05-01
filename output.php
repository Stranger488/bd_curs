<!DOCTYPE html>
<html>
<head>
    <title>Output</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <?php
            if (isset($output)) {
                echo $output . "\n\r";
            } else {
                echo "undefined\n\r";
            }
        ?>
        <br>

        <?php if (isset($nav_buttons)) { ?>
            <a href="../menu/menu.php" class="out_btn">В меню</a>
            <a href="?out" class="out_btn" name="out">Выход</a>
        <?php } ?>
    </div>

    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
