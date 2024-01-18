<?php 
include 'dbconnect.php';
$kodealat=$_POST['kodealat'];
$namaalat=$_POST['namaalat'];
$jenis=$_POST['jenis'];
$merk=$_POST['merk'];
$keteranganalat=$_POST['keteranganalat'];

$query = mysqli_query($conn,"insert into stockalat values('','$kodealat','$namaalat','$jenis','$merk','$keteranganalat')");
if ($query){

  echo " <div class='alert alert-success'>
  <strong>Sistem Berhasil Menambah Alat</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= stockalat.php'/>  ";
  } else { echo "<div class='alert alert-warning'>
  <strong>Sistem Gagal Menambah Alat</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= stockalat.php'/> ";
}

?>

<html>
<head>
  <link rel="icon" href="logoicon.ico">
  <title>Tambah Alat PJS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>