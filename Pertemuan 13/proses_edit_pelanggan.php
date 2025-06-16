<?php
include 'koneksi_db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Email = $_POST['Email'];
    $Telepon = (string) $_POST['Telepon'];  

    $stmt = $conn->prepare("UPDATE pelanggan SET Nama=?, Alamat=?, Email=?, Telepon=? WHERE ID=?");
    $stmt->bind_param("ssssi", $Nama, $Alamat, $Email, $Telepon, $id);

   if ($stmt->execute()) {
       echo "<script>alert('Data berhasil diperbarui'); window.location='index.php';</script>";
   } else {
       echo "<script>alert('Gagal memperbarui data'); window.location='index.php';</script>";
   }
}
?>