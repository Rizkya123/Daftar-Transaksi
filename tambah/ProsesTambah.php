<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO m_customer(tanggal, kode, nama, telp) VALUES(:tanggal,:kode,:nama,:telp)");
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':kode', $kode);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':telp', $telp);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: ../barang.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='../barang.php'>Kembali Ke Form</a>";
}
?>