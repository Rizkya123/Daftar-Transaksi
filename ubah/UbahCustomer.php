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
      Ubah customer
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
  $sql = $pdo->prepare("SELECT * FROM t_sales WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
?>

<form method="post" action="ProsesUbahCustomer.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Kode</label>
    <input class="form-control" type="text" name="kode" value="<?php echo $data['kode']; ?>">
  </div>
  <div class="form-group">
    <label>Tgl</label>
    <input class="form-control" type="date" name="tgl" value="<?php echo $data['tgl']; ?>">
  </div>
  <div class="form-group">
    <label>Cust ID</label>
    <input class="form-control" type="number" name="cust_id" value="<?php echo $data['cust_id']; ?>">
  </div>
  <div class="form-group">
    <label>Subtotal</label>
    <input class="form-control" type="number" name="subtotal" value="<?php echo $data['subtotal']; ?>">
  </div>
  <div class="form-group">
    <label>Diskon</label>
    <input class="form-control" type="number" name="diskon" value="<?php echo $data['diskon']; ?>">
  </div>
  <div class="form-group">
    <label>Ongkir</label>
    <input class="form-control" type="number" name="ongkir" value="<?php echo $data['ongkir']; ?>">
  </div>
  <div class="form-group">
    <label>Total Bayar</label>
    <input class="form-control" type="number" name="total_bayar" value="<?php echo $data['total_bayar']; ?>">
  </div>
  
   <input type="submit" value="Simpan" class="btn btn-primary">
    <a href="../customer.php"><input type="button" value="Batal" class="btn btn-default"></a>
</form>  