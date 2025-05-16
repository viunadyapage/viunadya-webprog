<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jenis Kendaraan Berdasarkan Roda</title> 
<body>
    <h2>Penentuan Jenis Kendaraan Berdasarkan Jumlah Roda</h2>
    <form method="post">
        <label>Jumlah Roda: </label>
        <input type="number" name="roda" min="1" required />
        <button type="submit">Cek Jenis Kendaraan</button>
    </form>
    <br>
    <?php include '../include/navigasi.php'; ?>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $roda = (int) $_POST['roda'];
            echo "<h3>Hasil:</h3>";
            echo "Jumlah Roda: $roda <br>";

            switch ($roda) { 
                //info jenis kendaraan ada di link ini ya https://an-nur.ac.id/jenis-kendaraan-berdasarkan-jumlah-roda-dari-roda-satu-hingga-roda-sepuluh/
                case 1:
                    echo "Jenis Kendaraan: Unicycle";
                    break;
                case 2:
                    echo "Jenis Kendaraan: Sepeda dan motor";
                    break;
                case 3:
                    echo "Jenis Kendaraan: Bajaj, Tuk-tuk, dan Sepeda motor roda tiga";
                    break;
                case 4:
                    echo "Jenis Kendaraan: Mobil dan Pick-up";
                    break;
                case 6:
                    echo "Jenis Kendaraan: Truk ringan dan Bus kecil";
                    break;
                case 8:
                    echo "Jenis Kendaraan: Truk kontainer dan crane atau loader";
                    break;
                case 10:
                    echo "Jenis Kendaraan: Truk trailer dan Truk tangki";
                    break;
                default:
                    echo "Jenis Kendaraan: Data tidak tersedia untuk jumlah roda tersebut.";
            }
        }
    ?>
</body>
</html>
