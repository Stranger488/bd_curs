<?php
    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $pdo->query($SQL);

    } catch (PDOException $e) {
        $output = '������ ��� ���������� ������� ' . $e->getMessage();
        include 'output.php';
        exit();
    }
?>
