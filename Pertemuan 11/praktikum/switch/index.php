<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nintendo switch</title>
</head>
<body>
    <?php
        $hari = "Minggu";
        switch ($hari) {
        case "Senin":
            echo "Hari pertama kerja";
            break;
        case "Selasa":
            echo "Hari hari lembur";
            break;
        case "Rabu":
            echo "Hari kejebak kerumunan warga kereta";
            break;
        case "Kamis":
            echo "#kabur dulu aja gasih";
            break;
        case "Jumat":
            echo "solat jumat tapi sy cewe";
            break;
        case "Minggu":
            echo "horee!libur akhir pekan";
            break;
        default:
            echo "Hari biasa";
        }   
    ?>
</body>
</html>