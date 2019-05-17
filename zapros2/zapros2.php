<?php 
    if (isset($_GET['out'])) {
            $output = "До свидания.";
            include '../include/output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'zapros2.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $SQL = "SELECT Dep_id, Dep_name, Dep_master_family, SUM(R_place_count) as place_count FROM hospital.department JOIN hospital.room ON (department.Dep_id=room.RDep_id) GROUP BY Dep_id;";
    include '../include/select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "Отделений в госпитале не найдено.";
        $nav_buttons = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>
