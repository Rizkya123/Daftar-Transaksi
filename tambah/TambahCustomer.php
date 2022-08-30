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
      Tambah customer
   </h1>
</div>
</div> 

<div class="panel panel-default">
<div class="panel-heading">Form</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">

<form method="post" action="ProsesTambahCustomer.php">
  <div class="form-group">
    <label>Kode</label>
    <input class="form-control" type="text" name="kode">
  </div>
  <div class="form-group">
    <label>Tgl</label>
    <input class="form-control" type="date" name="tgl">
  </div>
  <div class="form-group">
    <label>Cust ID</label>
    <input class="form-control" type="number" name="cust_id">
  </div>
  <div class="form-group">
    <label>Subtotal</label>
    <input class="form-control" type="number" name="subtotal">
  </div>
  <div class="form-group">
    <label>Diskon</label>
    <input class="form-control" type="number" name="diskon">
  </div>
  <div class="form-group">
    <label>Ongkir</label>
    <input class="form-control" type="number" name="ongkir">
  </div>
  <div class="form-group">
    <label>Total Bayar</label>
    <input class="form-control" type="number" name="total_bayar">
  </div>

   <input type="submit" value="Simpan" class="btn btn-primary">
    <a href="../customer.php"><input type="button" value="Batal" class="btn btn-default"></a>
</form>
