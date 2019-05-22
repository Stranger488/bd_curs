<?php
    if (isset($_GET['out'])) {
        $output = "�� ��������.";
        include '../include/output.php';
        exit();
    }

    if (isset($_GET['point'])) {
        $point = $_GET['point'];
        if ($point == 1) {
            header('location: ../zapros1/zapros1.php');
            exit();
        }
        if ($point == 2) {
            header('location: ../zapros2/zapros2.php');
            exit();
        }
        if ($point == 3) {
            header('location: ../zapros3/zapros3.php');
            exit();
        }
        if ($point == 4) {
            header('location: ../zapros4/zapros4.php');
            exit();
        }
        if ($point == 5) {
            header('location: ../zapros5/zapros5.php');
            exit();
        }
        if ($point == 6) {
            header('location: ../zapros6/zapros6.php');
            exit();
        }
        if ($point == 7) {
            header('location: ../otchet/otchet.php');
            exit();
        }
    }

    include 'menu.html';
?>