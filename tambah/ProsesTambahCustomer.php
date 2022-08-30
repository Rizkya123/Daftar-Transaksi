<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$kode = $_POST['kode'];
$tgl = $_POST['tgl'];
$cust_id = $_POST['cust_id'];
$subtotal = $_POST['subtotal'];
$diskon = $_POST['diskon'];
$ongkir = $_POST['ongkir'];
$total_bayar = $_POST['total_bayar'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO t_sales(kode, tgl, cust_id, subtotal, diskon, ongkir, total_bayar) VALUES(:kode,:tgl,:cust_id,:subtotal,:diskon, :ongkir, :total_bayar)");
$sql->bindParam(':kode', $kode);
$sql->bindParam(':tgl', $tgl);
$sql->bindParam(':cust_id', $cust_id);
$sql->bindParam(':subtotal', $subtotal);
$sql->bindParam(':diskon', $diskon);
$sql->bindParam(':ongkir', $ongkir);
$sql->bindParam(':total_bayar', $total_bayar);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: ../customer.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='TambahCustomer.php'>Kembali Ke Form</a>";
}
?>