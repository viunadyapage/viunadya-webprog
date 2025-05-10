<form method="post" action="">
    NPM: <input type="text" name="npm"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Prodi: <input type="text" name="prodi"><br><br>
    Semester: <input type="number" name="semester"><br><br>
    Biaya UKT (Rp): <input type="number" name="ukt"><br><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    if ($ukt >= 5000000 && $semester > 8) {
        $diskon = 0.15;
    } elseif ($ukt >= 5000000) {
        $diskon = 0.10;
    } else {
        $diskon = 0;
    }

    $potongan = $ukt * $diskon;
    $total_bayar = $ukt - $potongan;

    echo "NPM : $npm<br>";
    echo "NAMA : $nama<br>";
    echo "PRODI : $prodi<br>";
    echo "SEMESTER : $semester<br>";
    echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . ",-<br>";
    echo "DISKON : " . ($diskon * 100) . "%<br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",-";
}
?>
