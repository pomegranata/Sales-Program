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
<h2>LAPORAN DATA BARANG</h2>
<br>
	<form method="post">
		<input type="text" name="nt" placeholder="Mencari data...">
		<input type="submit" name="submit" value="Cari Data">
		<input type="button" onclick="location.href='lihat_data.php';" value="Tampilkan Semua"
	<form>
<br/>
<br/>
<!-- membuat tabel -->
	<table>
		<thead>
			<tr>
				<td><center>No.</center></td>
				<td><center>Barcode</center></td>
				<td><center>Nama Barang</center></td>
				<td><center>Nama Satuan</center></td>
				<td><center>Harga Barang</center></td>
				<td><center>Stok Gudang</center></td>
			</tr>
		</thead>	
<?php
if(!ISSET($_POST['submit'])){
	$sql = "SELECT * FROM barang";
	$query = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_array($query)){
?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row['Barcode']; ?></td>
			<td><?php echo $row['Nama']; ?></td>
			<td><?php echo $row['Satuan']; ?></td>
			<td><?php echo $row['Harga']; ?></td>
			<td><?php echo $row['Stok']; ?></td> 
		</tr>
<?php } } ?>

<!--melakukan pencarian dengan where-->
<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE barcode LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	?>
		<!--menampilkan hasil pencarian-->
			<!--pesan jika data ketemu---->
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Satuan']; ?></td>
				<td><?php echo $r['Harga']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
		<?php }} ?>
		
<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE nama LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Satuan']; ?></td>
				<td><?php echo $r['Harga']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
<?php }} ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE satuan LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Satuan']; ?></td>
				<td><?php echo $r['Harga']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
<?php }} ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE harga LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Satuan']; ?></td>
				<td><?php echo $r['Harga']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
<?php }} ?>

<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE stok LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	 ?>
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Satuan']; ?></td>
				<td><?php echo $r['Harga']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
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