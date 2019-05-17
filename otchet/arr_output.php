<!DOCTYPE html>
<html>
<head>
    <title>�����</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="container">
        <?php if (isset($already_exist)) { ?>
            <h4>����� ����� ��� ����������.</h4>
        <?php } ?>

        <?php if (isset($otchet)) {?>
            <h2>���������� ������</h2>
            <div class="table_wrap">
                <table class="table_res" border="1" width="100%">
                <thead>
                    <tr>
                        <td>����� ������</td>
                        <td>����� ���������</td>
                        <td>���</td>
                        <td>�����</td>
                        <td>������� ��������</td>
                        <td>���������� ���������</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($otchet as $otch): ?>
                        <tr>
                            <td><?php echo $otch['O_id']; ?></td>
                            <td><?php echo $otch['O_dep']; ?></td>
                            <td><?php echo $otch['O_year']; ?></td>
                            <td><?php echo $otch['O_month']; ?></td>
                            <td><?php echo $otch['O_diagn']; ?></td>
                            <td><?php echo $otch['O_count']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        <?php }?>


        <a href="../menu/menu.php" class="out_btn">� ����</a>
        <a href="?out" class="out_btn" name="out">�����</a>
    </div>


</body>
</html>