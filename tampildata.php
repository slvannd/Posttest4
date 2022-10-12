<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampildata</title>
    <link rel="stylesheet" href="tampildata.css" />
</head>
<body>
<?php
    if (isset($_POST['commit'])) {
        $brg = $_POST['brg'];
        $jmlh = $_POST['jmlh'];
        $nm = $_POST['nm'];
        $almt = $_POST['almt'];
        $tlp = $_POST['tlp'];

        echo "<br>nama barang : $brg";
        echo "<br>jumlah : $jmlh";
        echo "<br>nama pembeli : $nm";
        echo "<br>alamat : $almt";
        echo "<br>Telepon : $tlp";
    }
    ?>
</body>
</html>