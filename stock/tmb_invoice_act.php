<?php 
include 'dbconnect.php';
$tanggal = $_POST['tanggal'];
$noinvoice = $_POST['noinvoice'];
$nofakturpjk = $_POST['nofakturpjk'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($conn,"insert into invoice (id,tanggal,noinvoice,nofakturpjk,keterangan) values('','$tanggal','$noinvoice','$nofakturpjk','$keterangan')");
if ($query){

  echo " <div class='alert alert-success'>
  <strong>Sistem Berhasil Menambah Invoice</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= konfirminvoice.php'/>  ";
  } else { echo "<div class='alert alert-warning'>
  <strong>Sistem Gagal Menambah Invoice</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= konfirminvoice.php'/> ";
}

?>

<html>
<head>
  <link rel="icon" href="logoicon.ico">
  <title>Tambah Invoice PJS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>