<?php 
include 'dbconnect.php';
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];

$query1 = mysqli_query($conn,"insert into cinvoice (id, tanggal, noinvoice, nofakturpjk, keterangan, status) select id, tanggal, noinvoice, nofakturpjk, keterangan, status from invoice where id=$id");
$update = mysqli_query($conn,"update cinvoice set status = 'Sudah di Konfirmasi' where id='$id'");
$query2 = mysqli_query($conn,"delete from invoice where id=$id");

if ($query1 && $update && $query2){
  echo " <div class='alert alert-success'>
  <strong>Sistem Berhasil Mengonfirmasi Invoice</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= konfirminvoice.php'/>  ";
  } else { echo "<div class='alert alert-warning'>
  <strong>Sistem Gagal Mengonfirmasi Invoice</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= konfirminvoice.php'/> ";
}

?>

<html>
<head>
  <title>Tambah Barang Gudang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>