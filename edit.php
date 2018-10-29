<?php
include 'oop.php';
$nim=$_POST['nim'];
$result=$siswa->view_data($nim);
$row=mysqli_fetch_assos($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>6701170088</title>
</head>
<body>
		<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
		<form action="index.php" method="POST">

		NAMA : <input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
		NIM  : <input type="text" name="nim" value="<?php echo $row['nim'];?>"><br>
		TGL_LAHIR : <input type="text" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"><br>

</body>
</html>