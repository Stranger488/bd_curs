<?php 
    if (isset($_GET['out'])) {
            $output = "�� ��������.";
            include '../include/output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'otchet_all.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $SQL = "SELECT * FROM hospital.otchet;";
    include '../include/select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "������� ������� ������.";
        $nav_buttons = true;
        include '../include/output.php';
        exit();
    }


    include 'arr_output.php';
    exit();
?>
