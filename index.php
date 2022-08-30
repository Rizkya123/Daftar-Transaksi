<?php
  include "include.php";
?>

<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <li>
        <a href="DaftarTransaksi.php" class="active-menu"><i class="fa fa-dashboard"></i>Daftar transaksi</a>
      </li>
      <li>
        <a href="barang.php"><i class="fa fa-desktop"></i>Barang</a>
      </li>
      <li>
        <a href="customer.php"><i class="fa fa-bar-chart-o"></i>Customer</a>
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
      Daftar Transaksi
   </h1>
</div>
</div> 

<div class="row">
  <div class="col-md-12">
  <!-- Advanced Tables -->
<div class="panel panel-default">
<div class="panel-heading">Advanced Tables</div>
<div class="panel-body">
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr class="info">
        <th>No</th>
        <th>No transaksi</th>
        <th>Tanggal</th>
        <th>Nama customer</th>
        <th>Jumlah barang</th>
        <th>Sub total</th>
        <th>Diskon</th>
        <th>Ongkir</th>
        <th>Total</th>
      </tr>
    </thead>
  <tbody>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM daftar_transaksi");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['no_transaksi']."</td>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td>".$data['nama_customer']."</td>";
    echo "<td>".$data['jumlah_barang']."</td>";
    echo "<td>".$data['sub_total']."</td>";
    echo "<td>".$data['diskon']."</td>";
    echo "<td>".$data['ongkir']."</td>";
    echo "<td>".$data['total']."</td>";
    echo "</tr>";
  }
  ?>
  </tbody>
  </table>
</div>
</div>
</div>

  <!-- Advanced Tables -->
<div class="panel panel-default">
<div class="panel-heading">Transaksi/Customer</div>
<div class="panel-body">
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr class="info">
        <th>#</th>
        <th>#</th>
        <th>No</th>
        <th>Tanggal</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Telp</th>
      </tr>
    </thead>
  <tbody>
  <?php
  $no = 1;
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM m_customer");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><a href='ubah/ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='hapus/hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "<td>".$no++."</td>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td>".$data['kode']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "</tr>";
  }
  ?>
  </tbody>
  </table>
  </div>
</div>
</div>