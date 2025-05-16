<?php
define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");

$nama = "Nadya";
$umur = 19;
$berat = 42.0;
$isMahasiswa = true;
$kampus = null;

$hobi = ["membaca", "ngoding", "ngopi"];

class Mahasiswa {
    public $nama;
    public function sapa() {
        return "Halo, saya $this->nama";
    }
}

$mhs = new Mahasiswa();
$mhs->nama = $nama;

echo "<h2>Data Pribadi</h2>";
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Berat badan: " . $berat . " kg<br>";
echo "Status Mahasiswa: " . ($isMahasiswa ? "Ya" : "Tidak") . "<br>";
echo "Kampus: ";
var_dump($kampus);
echo "<br><br><b>Hobi Favorit:</b><br>";
echo "- " . $hobi[0] . "<br>";
echo "- " . $hobi[1] . "<br>";
echo "- " . $hobi[2] . "<br>";
echo "<br><b>Dari Object:</b><br>";
echo $mhs->sapa() . "<br>";
echo "<br><b>Informasi Sistem:</b><br>";
echo "Website: " . SITE_NAME . "<br>";
echo "Versi: " . VERSION . "<br>";
?>
