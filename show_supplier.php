<!DOCTYPE html>
<html>
	<head>
		<title>Data Master Barang</title>
		<link rel="stylesheet" href="lihat_style.css">
	</head>
<body>
<br>
<?php
require_once'connect.php';
$no = 1;
?>
<h2>LAPORAN DATA MASTER SUPPLIER</h2>
<br>
	<form method="post">
		<input type="text" name="nt" placeholder="Cari Data ...">
		<input type="submit" name="submit" value="Cari Data">
		<input type="button" onclick="location.href='show_supplier.php';" value="Tampilkan Semua"
	<form>
<br/>
<br/>
	<table>
		<thead>
			<tr>
				<td><center>No.</center></td>
				<td><center>Barcode</center></td>
				<td><center>Nama PT</center></td>
				<td><center>Barang</center></td>
				<td><center>Alamat</center></td>
				<td><center>Telepon</center></td>
			</tr>
		</thead>
<?php
if(!ISSET($_POST['submit'])){	
	$sql = "SELECT * FROM supplier";
	$query = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_array($query)){
?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row['Barcode']; ?></td>
			<td><?php echo $row['NamaPT']; ?></td>
			<td><?php echo $row['Barang']; ?></td>
			<td><?php echo $row['Alamat']; ?></td>
			<td><?php echo $row['Telepon']; ?></td>
		</tr>
<?php } } ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM supplier WHERE barcode LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['NamaPT']; ?></td>
				<td><?php echo $r['Barang']; ?></td>
				<td><?php echo $r['Alamat']; ?></td>
				<td><?php echo $r['Telepon']; ?></td>
			</tr>
<?php }} ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM supplier WHERE nama LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['NamaPT']; ?></td>
				<td><?php echo $r['Barang']; ?></td>
				<td><?php echo $r['Alamat']; ?></td>
				<td><?php echo $r['Telepon']; ?></td>
			</tr>
<?php }} ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM supplier WHERE barang LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['NamaPT']; ?></td>
				<td><?php echo $r['Barang']; ?></td>
				<td><?php echo $r['Alamat']; ?></td>
				<td><?php echo $r['Telepon']; ?></td>
			</tr>
<?php }} ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM supplier WHERE alamat LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['NamaPT']; ?></td>
				<td><?php echo $r['Barang']; ?></td>
				<td><?php echo $r['Alamat']; ?></td>
				<td><?php echo $r['Telepon']; ?></td>
			</tr>
<?php }} ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM supplier WHERE telepon LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['NamaPT']; ?></td>
				<td><?php echo $r['Barang']; ?></td>
				<td><?php echo $r['Alamat']; ?></td>
				<td><?php echo $r['Telepon']; ?></td>
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
