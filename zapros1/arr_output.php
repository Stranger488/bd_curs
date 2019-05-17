<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
	<title>������ 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <h2>���������� ������� 1</h2>

        <div class="table_wrap">
            <table class="table_res" border="1" width="100%">
                <thead>
                <tr>
                    <td>ID �����</td>
                    <td>������� �����</td>
                    <td>���������� ��������� �� ���</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Doc_id']; ?></td>
                        <td><?php echo $row['Doc_family']; ?></td>
                        <td><?php echo $row['pat_count']; ?></td>
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