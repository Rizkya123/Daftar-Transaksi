<?php
  include "include.php";
?>

 <!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
<div class="col-md-12">
   <h1 class="page-header">
      Ubah
   </h1>
</div>
</div> 

<div class="panel panel-default">
<div class="panel-heading">Form</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">

<?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM form_input WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
?>

<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Kode barang</label>
    <input class="form-control" type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>">
  </div>
  <div class="form-group">
    <label>Nama barang</label>
    <input class="form-control" type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
  </div>
  <div class="form-group">
    <label>Qty</label>
    <input class="form-control" type="number" name="qty" value="<?php echo $data['qty']; ?>">
  </div>
  <div class="form-group">
    <label>Harga Bandrol</label>
    <input class="form-control" type="number" name="harga_bandrol" value="<?php echo $data['harga_bandrol']; ?>">
  </div>
  <div class="form-group">
    <label>Diskon (%)</label>
    <input class="form-control" type="number" name="diskon_pct" value="<?php echo $data['diskon_pct']; ?>">
  </div>
  <div class="form-group">
    <label>Diskon (Rp)</label>
    <input class="form-control" type="number" name="diskon_nilai" value="<?php echo $data['diskon_nilai']; ?>">
  </div>
  <div class="form-group">
    <label>Harga diskon</label>
    <input class="form-control" type="number" name="harga_diskon" value="<?php echo $data['harga_diskon']; ?>">
  </div>
  <div class="form-group">
    <label>Total</label>
    <input class="form-control" type="number" name="total" value="<?php echo $data['total']; ?>">
  </div>

   <input type="submit" value="Simpan" class="btn btn-primary">
    <a href="FormInput.php"><input type="button" value="Batal" class="btn btn-default"></a>
</form>  