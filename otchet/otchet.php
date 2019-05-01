<?php 
    if (isset($_GET['out'])) {
            $output = "До свидания.";
            include '../output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'otchet.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../db_connect.php';

    $in_year = $_GET['in_year'];
    $in_month = $_GET['in_month'];
    $SQL = "SELECT * FROM hospital.otchet WHERE O_year='$in_year' AND O_month='$in_month'";
    include '../select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $already_exist = true;
        $otchet = $result->fetchAll();
    } else {
//        $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
//        $q = $pdo->exec("CALL hospital.OTCH($in_year, $in_month)");
//        echo 'Отчет успешно создан.';

        $STH = $pdo->prepare("CALL hospital.OTCH($in_year, $in_month)");
        $STH->execute();
        $STH->closeCursor();
//        echo 'Отчет успешно создан.';

        include '../select.php';
        $row_num = $result->rowCount();
        if ($row_num > 0) {
            $otchet = $result->fetchAll();
        } else {
            $output = "В отчете c текущими параметрами нет строк.";
            $nav_buttons = true;
            include '../output.php';
            exit();
        }

    }

    include 'arr_output.php';
    exit();
?>
