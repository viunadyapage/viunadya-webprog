<?php
echo "<h2>Contoh program PHP</h2>";
echo "<hr>";

define("PAJAK", 0.10);

$hargaBarang = [
    "Manga Windbreaker" => 65000
];

$barang = "Manga Windbreaker";
$jumlah = 3;

$hargaSatuan = $hargaBarang[$barang];
$total = $hargaSatuan * $jumlah;
$pajak = $total * PAJAK;
$totalAkhir = $total + $pajak;

echo "Nama Barang: $barang<br>";
echo "Jumlah: $jumlah<br>";
echo "Harga Satuan: Rp" . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Total: Rp" . number_format($total, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp" . number_format($pajak, 0, ',', '.') . "<br>";
echo "<strong>Total Akhir: Rp" . number_format($totalAkhir, 0, ',', '.') . "</strong><br>";
?>
