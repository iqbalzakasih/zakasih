<html>
<head>
<title>Data Pengguna</title>
</head>
<body>
	<?php
		if (isset ($_POST['id'])) {
			$url = 'https://zakasih32.000webhostapp.com/jsonmhsw.php';
			//$data = "[{\"id\":\".$_POST['id'].\",\"nama\":\".$_POST['nama'].\",\"email\":\".$_POST['email'].\",\"negara\":\".$_POST['negara'].\"}]";//
			$data="{\"id\":\"".$_POST['id']."\",\"nama\":\"".$_POST['nama']."\",\"email\":\"".$_POST['email']."\",\"negara\":\"".$_POST['negara']."\"}";
			echo "datanya ".$data;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$response = curl_exec($ch);
			echo "response ".$response;
			curl_close($ch);
		}
	?>
	<form method="POST" action="tambahjson.php">
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id" id="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email"></td>
			</tr>
			<tr>
				<td>Negara</td>
				<td><input type="text" name="negara" id="negara"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
				<td></td>
			</tr>
		</table>
	</form>
	<a href="https://zakasih32.000webhostapp.com/pengguna.php"> Untuk melihat pengguna lain </a>
</body>
</html>