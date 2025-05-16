<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Bilangan Genap</title> 
</head>
<body>
    <?php include '../include/navigasi.php'; ?>
    <h2>Bilangan Genap dari 2 sampai 10</h2>
    <?php
        for ($i = 2; $i <= 10; $i += 2) {
            echo $i . "<br>";
        }
    ?>
</body>
</html>
