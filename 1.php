<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="#">
		<h3>Binner Ke Hexadesimal</h3>
		<input type="text" name="binner">
		<button type="submit">Convert</button>
	</form>

	<br>
	<span>Nilai Hexa :</span>
	<?php 
	$binary = $_GET["binner"];
	if ($binary) {
		if (preg_match("/^[0-1]*$/", $binary)) {
			echo strtoupper(base_convert($binary, 2, 16));
	//merubah basis 2(binner) ke basis 16(hexadesimal)
		}else{
			echo '<script language="javascript">alert("Nilai Input Harus 0 dan 1"); window.location.href="1.php";</script>';
		}
	}
	?>
</body>
</html>