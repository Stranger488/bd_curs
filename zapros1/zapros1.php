<?php 
    if (isset($_GET['out'])) {
            $output = "�� ��������.";
            include '../include/output.php';
            exit();
    }

    if (!isset($_GET['send'])) {
        include 'zapros1.html';
        exit();
    }

    $host = 'localhost';
    $database = 'hospital';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $dep_num = $_GET['dep_num'];
    $zapros1_year = $_GET['zapros1_year'];
    $SQL = "SELECT Doc_id, Doc_family, COUNT(*) AS pat_count FROM hospital.doctor JOIN hospital.patient ON (doctor.Doc_id=patient.PDoc_id) JOIN hospital.department ON (doctor.DocDep_id=department.Dep_id) WHERE Dep_name='$dep_num' AND year(P_incoming_date)=$zapros1_year GROUP BY Doc_id";
    include '../include/select.php';
    $row_num = $result->rowCount();
    if ($row_num > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "��������� � ��������� $dep_num �� $zapros1_year ��� �� �������.";
        $nav_buttons = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>
