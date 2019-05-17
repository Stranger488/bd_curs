<?php 
    if (isset($_GET['out'])) {
            $output = "До свидания.";
            include '../include/output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'zapros4.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $SQL = "SELECT * FROM hospital.patient WHERE P_incoming_date=(SELECT MIN(P_incoming_date) FROM hospital.patient);";
    include '../include/select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "Таких пациентов не найдено.";
        $nav_buttons = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>
