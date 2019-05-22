<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
	<title>������ 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="img"></div>
    <div class="container">
        <h2>���������� ������� 5</h2>
        <div class="table_wrap">
            <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>����� �����</td>
                    <td>�. �. �. �����</td>
                    <td>���������� ������</td>
                    <td>�����</td>
                    <td>��� ��������</td>
                    <td>�������������</td>
                    <td>���� ����������� �� ������</td>
                    <td>���� ����������</td>
                    <td>����� ���������</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Doc_id']; ?></td>
                        <td><?php echo $row['Doc_family']; ?></td>
                        <td><?php echo $row['Doc_passport']; ?></td>
                        <td><?php echo $row['Doc_address']; ?></td>
                        <td><?php echo $row['Doc_birth_year']; ?></td>
                        <td><?php echo $row['Doc_speciality']; ?></td>
                        <td><?php echo $row['Doc_enroll_date']; ?></td>
                        <td><?php echo $row['Doc_dismiss_date']; ?></td>
                        <td><?php echo $row['DocDep_id']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>

        <a href="../menu/menu.php" class="out_btn">� ����</a>
        <a href="?out" class="out_btn" name="out">�����</a>
    </div>


</body>
</html>