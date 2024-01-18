<?php 
include 'dbconnect.php';
$kodealat = $_POST['kodealat'];
$tanggal = $_POST['tanggal'];
$nopo = $_POST['nopo'];
$namapemesan = $_POST['namapemesan'];
$namatoko = $_POST['namatoko'];
$namabarang = $_POST['namabarang'];
$qty = $_POST['qty'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($conn,"insert into pengeluaranalat (ida,tanggal,nopo,namapemesan,namatoko,namabarang,qty,satuan,harga,lokasi,keterangan) values('$kodealat','$tanggal','$nopo','$namapemesan', '$namatoko', '$namabarang','$qty', '$satuan', '$harga', '$lokasi', '$keterangan')");
if ($query){

  echo " <div class='alert alert-success'>
  <strong>Sistem Berhasil Menambah Pembelian Barang</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= pembelianbarang.php'/>  ";
  } else { echo "<div class='alert alert-warning'>
  <strong>Sistem Gagal Menambah Pembelian Barang</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= pembelianbarang.php'/> ";
}

?>

<html>
<head>
  <link rel="icon" href="logoicon.ico">
  <title>Tambah PO Barang PJS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>