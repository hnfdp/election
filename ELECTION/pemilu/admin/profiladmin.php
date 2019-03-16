<?php 
include '../koneksi.php';
?>
<html>
	<head>
		<title>ELECTION</title>
	</head>
	<body>
		<?php 

			$query = "SELECT * FROM PILIHAN WHERE nama_kandidat='Bimo'";
			$jalandong = $connection->query($query);
			$cek = $jalandong->rowCount();

			echo $cek;
		?>
	</body>
</html>