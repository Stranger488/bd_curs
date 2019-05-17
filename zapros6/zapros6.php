<?php 
    if (isset($_GET['out'])) {
            $output = "До свидания.";
            include '../include/output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'zapros6.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $zapros6_year = $_GET['zapros6_year'];
    $zapros6_month = $_GET['zapros6_month'];
    $SQL = "SELECT Doc_family FROM hospital.doctor LEFT JOIN (SELECT * FROM hospital.patient WHERE YEAR(P_incoming_date)=$zapros6_year AND MONTH(P_incoming_date)=$zapros6_month) p2017_03
	ON (doctor.Doc_id=p2017_03.PDoc_id) WHERE P_id IS NULL;";
    include '../include/select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "Таких врачей не найдено.";
        $nav_buttons = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>
