<?php
  include "include.php";
?>

<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <li>
        <a href="index.php"><i class="fa fa-dashboard"></i>Daftar transaksi</a>
      </li>
      <li>
        <a href="barang.php"><i class="fa fa-desktop"></i>Barang</a>
      </li>
      <li>
        <a href="customer.php" class="active-menu"><i class="fa fa-bar-chart-o"></i>Customer</a>
      </li>    
    </ul>
  </div>

</nav>

 <!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
<div class="col-md-12">
   <h1 class="page-header">
      Customer
   </h1>
</div>
</div> 

<div class="row">
  <div class="col-md-12">
  <!-- Advanced Tables -->
<div class="panel panel-default">
<div class="panel-heading">Advanced Tables</div>
<div class="panel-body">

<a href="tambah/TambahCustomer.php" class="btn btn-success btn-lg">Tambah</a>
<br></br>

<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr class="info">
        <th>#</th>
        <th>#</th>
        <th>No</th>
        <th>Kode</th>
        <th>Tgl</th>
        <th>Customer id</th>
        <th>Diskon</th>
        <th>Ongkir</th>
        <th>Total bayar</th>
      </tr>
    </thead>
  <tbody>
  <?php
  $no = 1;
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM t_sales");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><a href='ubah/UbahCustomer.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='hapus/HapusCustomer.php?id=".$data['id']."'>Hapus</a></td>";
    echo "<td>".$no++."</td>";
    echo "<td>".$data['kode']."</td>";
    echo "<td>".$data['tgl']."</td>";
    echo "<td>".$data['cust_id']."</td>";
    echo "<td>".$data['diskon']."</td>";
    echo "<td>".$data['ongkir']."</td>";
    echo "<td>".$data['total_bayar']."</td>";
    echo "</tr>";
  }
  ?>
  </tbody>
  </table>

  