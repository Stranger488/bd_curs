<!DOCTYPE html>
<html>
<head>
    <title>������ 2</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <h2>���������� ������� 2</h2>

        <table class="table_res" border="1" width="100%">
            <thead>
                <tr>
                    <td>����� ���������</td>
                    <td>�������� ���������</td>
                    <td>�. �. �. �����������</td>
                    <td>���������� ���� � ���������</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Dep_id']; ?></td>
                        <td><?php echo $row['Dep_name']; ?></td>
                        <td><?php echo $row['Dep_master_family']; ?></td>
                        <td><?php echo $row['place_count']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="out_btn">� ����</a>
        <a href="?out" class="out_btn" name="out">�����</a>
    </div>


</body>
</html>