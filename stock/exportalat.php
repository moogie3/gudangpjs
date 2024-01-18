<!doctype html>
<html class="no-js" lang="en">

<?php 
include 'cek.php';
include 'dbconnect.php';
?>

<html>
<head>
	<link rel="icon" href="logoicon.ico">
	<title>Export Data Stock Alat PJS</title>
	<link rel="icon" type="image/png" href="favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
	<div class="container">
		<br>
		<h2>Stock Alat PT. PANCA JAYA STEVEDORING</h2>
		<h4> (Inventory Alat) </h4>
		<br>
		<div class="data-tables datatable-dark">
			<table class="display" id="dataTable3" style="width:100%"><thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Kode Alat</th>
					<th>Nama Alat</th>
					<th>Jenis</th>
					<th>Merk</th>
					<th>Keterangan</th>
				</tr></thead><tbody>
					<?php 
					$brgs=mysqli_query($conn,"SELECT * from stockalat order by kodealat ASC");
					$no=1;
					while($p=mysqli_fetch_array($brgs)){
						$ida = $p['idx'];

						?>

						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $p['kodealat'] ?></td>
							<td><?php echo $p['namaalat'] ?></td>
							<td><?php echo $p['jenis'] ?></td>
							<td><?php echo $p['merk'] ?></td>
							<td><?php echo $p['keteranganalat'] ?></td>
						</tr>		
						<?php 
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
	<script>
		$(document).ready(function() {
			$('#dataTable3').DataTable( {
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print',
				]
			} );
		} );

	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

	

</body>

</html>