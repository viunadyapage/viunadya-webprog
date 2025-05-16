<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Nama Hewan</title>
</head>
<body>
    <?php include '../include/navigasi.php'; ?>
    <h2>Daftar 20 Nama Hewan Darat</h2>
    <?php
        $hewan = [ //data nama hewan di link ini ya https://www.scribd.com/document/354239962/Nama-Hewan-Dalam-Inggris
            "Anjing", "Kucing", "Sapi", "Kerbau", "Kambing",
            "Rusa", "Ayam", "Semut", "Cacing", "Macan",
            "Singa", "Jerapah", "Gajah", "Tikus", "Domba",
            "Babi", "Ular", "Beruang", "Serigala", "Badak"
        ];

        foreach ($hewan as $nama) {
            echo $nama . "<br>";
        }
    ?>
</body>
</html>
