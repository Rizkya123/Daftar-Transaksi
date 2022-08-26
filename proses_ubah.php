<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$qty = $_POST['qty'];
$harga_bandrol = $_POST['harga_bandrol'];
$diskon_pct = $_POST['diskon_pct'];
$diskon_nilai = $_POST['diskon_nilai'];
$harga_diskon = $_POST['harga_diskon'];
$total = $_POST['total'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE form_input SET kode_barang=:kode_barang, nama_barang=:nama_barang, qty=:qty, harga_bandrol=:harga_bandrol, diskon_pct=:diskon_pct, diskon_nilai=:diskon_nilai, harga_diskon=:harga_diskon, total=:total WHERE id=:id");
$sql->bindParam(':kode_barang', $kode_barang);
$sql->bindParam(':nama_barang', $nama_barang);
$sql->bindParam(':qty', $qty);
$sql->bindParam(':harga_bandrol', $harga_bandrol);
$sql->bindParam(':diskon_pct', $diskon_pct);
$sql->bindParam(':diskon_nilai', $diskon_nilai);
$sql->bindParam(':harga_diskon', $harga_diskon);
$sql->bindParam(':total', $total);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: FormInput.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>