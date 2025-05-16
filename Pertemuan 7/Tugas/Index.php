<?php
define("PAJAK", 0.1);

$daftar_harga = [
    "keyboard" => 150000,
    "mouse" => 50000,
    "monitor" => 2500000
];

$hasil = "";

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = strtolower($_POST["barang"]);
    $jumlah_beli = (int) $_POST["jumlah"];

    if (array_key_exists($nama_barang, $daftar_harga)) {
        $harga_satuan = $daftar_harga[$nama_barang];
        $total_sebelum_pajak = $harga_satuan * $jumlah_beli;
        $pajak = $total_sebelum_pajak * PAJAK;
        $total_bayar = $total_sebelum_pajak + $pajak;

        $hasil = "
            <h2><b>Perhitungan Total Pembelian (Dengan Array)</b></h2>
            <hr>
            <p>Nama barang: $nama_barang</p>
            <p>Harga satuan: Rp " . number_format($harga_satuan, 0, ',', '.') . "</p>
            <p>Jumlah beli: $jumlah_beli</p>
            <p>Total harga (sebelum pajak): Rp " . number_format($total_sebelum_pajak, 0, ',', '.') . "</p>
            <p>Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "</p>
            <p><b>Total bayar: Rp " . number_format($total_bayar, 0, ',', '.') . "</b></p>
        ";
    } else {
        $hasil = "<p>Barang tidak tersedia.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Harga</title>
</head>
<body>
    <h1>Form Pembelian</h1>
    <form method="POST">
        <label>Nama Barang:</label><br>
        <input type="text" name="barang" required><br><br>

        <label>Jumlah Beli:</label><br>
        <input type="number" name="jumlah" min="1" required><br><br>

        <input type="submit" value="Hitung">
    </form>

    <br>
    <?php echo $hasil; ?>
</body>
</html>
