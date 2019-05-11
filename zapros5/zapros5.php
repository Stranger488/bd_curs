<?php 
    if (isset($_GET['out'])) {
            $output = "До свидания.";
            include '../output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'zapros5.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../db_connect.php';

    $SQL = "SELECT * FROM hospital.doctor LEFT JOIN hospital.patient ON (doctor.Doc_id=patient.PDoc_id) WHERE P_id IS NULL;";
    include '../select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "Таких врачей не найдено.";
        $nav_buttons = true;
        include '../output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>
