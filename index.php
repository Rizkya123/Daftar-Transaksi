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
        <a href="FormInput.php"><i class="fa fa-desktop"></i>Form input</a>
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
      <tr>
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
</body>
</html>