<?php 
    if (isset($_GET['out'])) {
            $output = "До свидания.";
            include '../output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'zapros3.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../db_connect.php';

    $SQL = "SELECT * FROM hospital.doctor WHERE Doc_enroll_date=(SELECT MIN(Doc_enroll_date) FROM hospital.doctor) AND Doc_dismiss_date IS NULL;";
    include '../select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "Такого врача не найдено.";
        $nav_buttons = true;
        include '../output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>
