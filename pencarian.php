<?php
	require("koneksi.php");
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		
		<title>Doa Islami</title>
		
		<link rel="shortcut icon" href="images/2.jpg">
		<link rel="stylesheet" type="text/css" href="assests/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assests/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="assests/jquery/jquery.min.js"></script>
		<script src="assests/jquery/jquery.js"></script>
	</head>

	<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<a href="index.php" class="navbar-brand">DOA SEHARI - HARI</a>
				
					</div>
			</nav>
							
				</form>
			<div class="container">
				<h1 class="page-header">
					<span class="glyphicon glyphicon"></span>Data Doa Sehari - Hari 
				</h1>

				<table class="table table-striped table-bordered table-hover" id="mydata">
					<thead>
						<tr>
							<th>NO</th>
							<th>BAGIAN</th>
							<th>Nama Doa</th>
							<th>Doa Harian</th>
							<th>Latin</th>
							<th>Arti</th>
						</tr>
					</thead>
					
					<tfoot>
						<tr>
							<th>NO</th>
							<th>BAGIAN</th>
							<th>Nama Doa</th>
							<th>Doa Harian</th>
							<th>Latin</th>
							<th>Arti</th>
						</tr>
					</tfoot>

	<tbody>
						<?php
							include("koneksi.php");
							$cari = $_POST['cari'];
							
							$sql = mysqli_query($connect,"SELECT * FROM doa_harian  WHERE nama_doa LIKE '%$cari%' OR doa_harian LIKE '%$cari%' OR terjemahan LIKE '%$cari%' OR latin LIKE '%$cari%'");
							while($query = mysqli_fetch_array($sql)){
						?>				

						<tr>
									<td><?php echo $query['id_doa_harian'];?></td>
									<td><?php echo $query['kategori'];?></td>
									<td><?php echo $query['nama_doa'];?></td>
									<td><?php echo $query['doa_harian'];?></td>
									<td><?php echo $query['latin'];?></td>
									<td><?php echo $query['terjemahan'];?></td>
							</tr>

								<?php
							}
						?>	
					</tbody>
				</table>
			</div>
			
			<footer class="footer text-center" style="position: relative; background-color:#222; color:white; padding:10px 20px; bottom: -50px">
				Copyright © PRAK. RPL SD 2018
			</footer>
		</div>
	</body>
</html>

<script>
	$(document).ready(function(){
		$('#mydata').DataTable({
			"searching": false
		});
	});
</script>