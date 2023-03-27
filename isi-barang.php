<html>
	<head>
		<title>Input Data Barang Baru</title>
		<link rel="stylesheet" href="isi_style.css">
	</head>
<body>
	<div style="border:0; padding:10px; width:760px; height:auto;">
		<form action="simpan_barang.php" method="POST">
			<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="46">
					<td width="10%"></td>
					<td width="25%"></td>
					<td width="65%"><font color="Red" size="6">Form Input Data Barang</font></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Barcode</font></td>
					<td><input type="text" name="barcode" size="35" maxlength="6" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Nama Barang</font></td>
					<td><input type="text" name="nama" size="50" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Satuan</font></td>
					<td><select name="satuan">
						<option value="-">- Satuan Barang -
						<option value="PCS">PCS
						<option value="Box">Box
						<option value="Kaleng">Kaleng
						<option value="Pack">Pack
					</select></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3">Harga Barang</font></td>
					<td><input type="text" name="harga" size="50" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td> </td>
					<td><font size="3">Stok Gudang</font></td>
					<td><input type="text" name="stok" size="50" maxlength="30" /></td>
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