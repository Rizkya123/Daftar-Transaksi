<?php
  include "../include.php";
?>

<!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


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
  include "../koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM m_customer WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
?>

<form method="post" action="ProsesUbah.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <h3>Transaksi</h3>
    <br>
    <label>Tanggal</label>
    <input class="form-control" type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>">
  </div>
  <div class="form-group">
    <h3>Customer</h3>
    <br>
    <label>kode</label>
    <input class="form-control" type="text" name="kode" value="<?php echo $data['kode']; ?>">
  </div>
  <div class="form-group">
    <label>nama</label>
    <input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>">
  </div>
  <div class="form-group">
    <label>Telp</label>
    <input class="form-control" type="number" name="telp" value="<?php echo $data['telp']; ?>">
  </div>
 
   <input type="submit" value="Simpan" class="btn btn-primary">
    <a href="../index.php"><input type="button" value="Batal" class="btn btn-default"></a>

</form>  