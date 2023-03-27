<!DOCTYPE html>
<html>
	<head>
		<title>Data Master Barang</title>
		<link rel="stylesheet" href="lihat_style.css">
	</head>
<body>
<br>

<?php
require_once'koneksi.php';
$no = 1;
?>
<h2>LAPORAN DATA SATUAN BARANG</h2>
<br>
	<form method="post">
		<input type="text" name="nt" placeholder="Cari Data ...">
		<input type="submit" name="submit" value="Cari Data">
		<input type="button" onclick="location.href='lihat_satuan.php';" value="Tampilkan Semua"
	<form>
<br/>
<br/>
	<table>
		<thead>
			<tr>
				<td><center>No.</center></td>
				<td><center>Nama Satuan</center></td>
			</tr>
		</thead>	
<?php
if(!ISSET($_POST['submit'])){
	$sql = "SELECT * FROM satuan";
	$query = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_array($query)){
?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row['Satuan']; ?></td>
		</tr>
<?php 	}
} ?>

<?php if (ISSET($_POST['submit'])){
$cari = $_POST['nt'];
$query2 = "SELECT * FROM satuan WHERE satuan LIKE '%$cari%'";

$sql = mysqli_query($db, $query2);
while ($r = mysqli_fetch_array($sql)){
 ?>
		<script language="JavaScript">
		alert('Data ditemukan!');
		</script>
<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $r['Satuan']; ?></td>
</tr>
<?php }} ?>
</table>
	<br>
	<tr height="46">
			<td> </td>
			<td> </td>
			<td>
				<input type="button" onclick="location.href='index.php';" value="<< Kembali"
			</td>
		</tr>
		</br>
</body>
</html>