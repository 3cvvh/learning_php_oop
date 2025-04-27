<?php
$db = mysqli_connect("localhost","root","","mahasiswa");
$reuslt = mysqli_query($db,"SELECT*FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYaxl</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>nama</th>
            <th>nrp</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        
        <?php while($row = mysqli_fetch_assoc($reuslt)){ ?><tr>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["nrp"] ?></td>
            <td><?= $row["email"] ?>>/td>
            <td><?= $row["jurusan"] ?></td></tr>
        <?php }; ?>
    </table>
</body>
</html>