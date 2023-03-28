<html>
	<head>
		<title>Input Data Master Supplier</title>
		<link rel="stylesheet" href="isi_style.css">
	</head>
<body>
	<div style="border:0; padding:10px; width:760px; height:auto;">
		<form action="simpan_supplier.php" method="POST">
			<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="46">
					<td width="10%"></td>
					<td width="25%"></td>
					<td width="65%"><font color="Red" size="6">Form Input Data Master Supplier</font></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Barcode</font></td>
					<td><input type="text" name="barcode" size="50" maxlength="6" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Nama PT</font></td>
					<td><input type="text" name="nama" size="50" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Barang</font></td>
					<td><input type="text" name="barang" size="50" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Alamat</font></td>
					<td><input type="text" name="alamat" size="50" maxlength="100" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Telepon</font></td>
					<td><input type="text" name="telepon" size="50" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td></td>
					<td><input type="submit" name="Submit" value="Simpan">
						<input type="reset" name="Reset" value="Batal"></td>
						<input type="button" onclick="location.href='index.php';" value="<< Kembali Ke Menu"
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
