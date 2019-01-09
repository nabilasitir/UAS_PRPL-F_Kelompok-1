<?php
	require("koneksi.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		
		<title>DOA ISLAMI</title>
		
		<link rel="shortcut icon" href="images/2.jpg">
		<link rel="stylesheet" type="text/css" href="assests/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assests/bootstrap/css/bootstrap.min.css">
	</head>
	
	<body>
		<div id="wrapper">
			<div class="text-center">
				<img src="images/2.jpg" style="height:300px; width:300px; margin-top:100px">
				
				
				<form class="form-inline my-2 my-lg-2" action="pencarian.php" method="POST">
					<input class="form-control mr-sm-2" type="text" name="cari" placeholder="Pencarian" aria-label="Search" style="width:600px">
					<button class="btn btn-success my-2 my-sm-0" type="submit">Cari</button>
				</form>
				
			</div>

			<footer class="footer" style="position: relative; background-color:#222; color:white; padding:20px 30px; bottom: -182px">
				<div class="pull-left" style="margin-left:10px">
					<?php
						include("koneksi.php");
							
						$sql = mysqli_query($connect,"SELECT COUNT(*) AS jumlah FROM doa_harian");
						$result = mysqli_fetch_array($sql);
					?>
					<small class="progress-note"><?php echo $result['jumlah'];?> doa terdata</small>
				</div>
				
				<div class="pull-right" style="margin-right:10px;">
					<a href="data_doa.php"><span class="glyphicon glyphicon-book"></span> DATA DOA</a>
				</div>
			</footer>	
		</div>	
	</body>
</html>