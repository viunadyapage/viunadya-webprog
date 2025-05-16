<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ternary Operator</title>
</head>
<body>
    <?php include '../include/navigasi.php'; ?>
    <?php
        $angka = 7; // ubah saja jadi bilangan ganjil atau genap ya
        $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
        echo "Angka $angka adalah $hasil.";
    ?>
</body>
</html>
