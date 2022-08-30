<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$qty = $_POST['qty'];
$harga_bandrol = $_POST['harga_bandrol'];
$diskon_pct = $_POST['diskon_pct'];
$diskon_nilai = $_POST['diskon_nilai'];
$harga_diskon = $_POST['harga_diskon'];
$total = $_POST['total'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO barang(kode_barang, nama_barang, qty, harga_bandrol, diskon_pct, diskon_nilai, harga_diskon, total) VALUES(:kode_barang,:nama_barang,:qty,:harga_bandrol,:diskon_pct, :diskon_nilai, :harga_diskon, :total)");
$sql->bindParam(':kode_barang', $kode_barang);
$sql->bindParam(':nama_barang', $nama_barang);
$sql->bindParam(':qty', $qty);
$sql->bindParam(':harga_bandrol', $harga_bandrol);
$sql->bindParam(':diskon_pct', $diskon_pct);
$sql->bindParam(':diskon_nilai', $diskon_nilai);
$sql->bindParam(':harga_diskon', $harga_diskon);
$sql->bindParam(':total', $total);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: ../barang.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='TambahBarang.php'>Kembali Ke Form</a>";
}
?>