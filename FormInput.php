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
        <a href="FormInput.php" class="active-menu"><i class="fa fa-desktop"></i>Form input</a>
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
      Form Input
   </h1>
</div>
</div> 

<a href="tambah.php" class="btn btn-success btn-lg">Tambah</a>
<br></br>

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
        <th>#</th>
        <th>#</th>
        <th>No</th>
        <th>Kode barang</th>
        <th>Nama barang</th>
        <th>Qty</th>
        <th>Harga bandrol</th>
        <th>Diskon (%)</th>
        <th>Diskon (Rp)</th>
        <th>Harga Diskon</th>
        <th>Total</th>
      </tr>
    </thead>
  <tbody>
  <?php
  $no = 1;
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM form_input");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><a href='ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "<td>".$no++."</td>";
    echo "<td>".$data['kode_barang']."</td>";
    echo "<td>".$data['nama_barang']."</td>";
    echo "<td>".$data['qty']."</td>";
    echo "<td>".$data['harga_bandrol']."</td>";
    echo "<td>".$data['diskon_pct']."</td>";
    echo "<td>".$data['diskon_nilai']."</td>";
    echo "<td>".$data['harga_diskon']."</td>";
    echo "<td>".$data['total']."</td>";
    echo "</tr>";
  }
  ?>
  </tbody>
  </table>
</body>
</html>