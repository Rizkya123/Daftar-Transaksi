<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE m_customer SET tanggal=:tanggal, kode=:kode, nama=:nama, telp=:telp WHERE id=:id");
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':kode', $kode);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':telp', $telp);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: ../index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
}
?>