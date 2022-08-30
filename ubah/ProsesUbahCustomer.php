<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$kode = $_POST['kode'];
$tgl = $_POST['tgl'];
$cust_id = $_POST['cust_id'];
$subtotal = $_POST['subtotal'];
$diskon = $_POST['diskon'];
$ongkir = $_POST['ongkir'];
$total_bayar = $_POST['total_bayar'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE t_sales SET kode=:kode, tgl=:tgl, cust_id=:cust_id, subtotal=:subtotal, diskon=:diskon, ongkir=:ongkir, total_bayar=:total_bayar WHERE id=:id");
$sql->bindParam(':kode', $kode);
$sql->bindParam(':tgl', $tgl);
$sql->bindParam(':cust_id', $cust_id);
$sql->bindParam(':subtotal', $subtotal);
$sql->bindParam(':diskon', $diskon);
$sql->bindParam(':ongkir', $ongkir);
$sql->bindParam(':total_bayar', $total_bayar);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: ../customer.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='UbahCustomer.php'>Kembali Ke Form</a>";
}
?>