<?php
include "connect.php";
	
	//variabel untuk menangkap masukan data
	$barcode		= $_POST["barcode"];
	$nama			= $_POST["nama"];
	$satuan			= $_POST["satuan"];
	$harga			= $_POST["harga"];
	$stok			= $_POST["stok"];

	//melakukan pengecekan isian apakah data kosong atau ada isinya
	if($barcode=="") {
?>
		<script language="JavaScript">
		alert('Isian barcode masih kosong. Silahkan diisi dahulu');
		document.location='input-item.php';
		</script>
	<?php
	}

	if($nama==""){
	?>
		<script language="JavaScript">
		alert('Isian Nama masih kosong. Silahkan diisi dahulu');
		document.location='input-item.php';
		</script>
	<?php
	}
	if($satuan=="-"){
	?>
		<script language="JavaScript">
		alert ('Isian satuan masih kosong. Silahkan diisi dahulu');
		document.location='input-item.php';
		</script>
	<?php
	}
	if($harga==""){
	?>
		<script language="JavaScript">
		alert ('Isian harga barang masih kosong. Silahkan diisi dahulu');
		document.location='input-item.php';
		</script>
	<?php
	}
	if($stok==""){
	?>
		<script language="JavaScript">
		alert ('Isian stok barang masih kosong. Silahkan diisi dahulu');
		document.location='input-item.php';
		</script>
	<?php
	}

	else {
		//cek input barcode apakah ada yang sama
		
		$pilih="select * from barang where barcode='$barcode'";
		$cek=mysqli_query($db,  $pilih);
		$jumlah_data = mysqli_num_rows($cek);
		
		if ($jumlah_data >= 1 ){
		?>
			<script language="JavaScript">
			alert('Barcode yang sama sudah digunakan');
			document.location='input-item.php';
			</script>
		<?php
		}
		
		else { 
			// memasukkan data ke database
			$query="insert into barang (Barcode,Nama,Satuan,Harga,Stok) values
				('$barcode','$nama','$satuan','$harga','$stok')";
				
			//Menjalankan query
			$hasil=mysqli_query($db,$query);
			
			//Mengecek apakah berhasil atau tidak
			if ($hasil){
				//Kembali ke halaman isi data
			?>
					<script language="JavaScript">
					alert('Proses Simpan Data Berhasil!');
					document.location='input-item.php';
					</script>
			<?php
					exit;
			}
			else{
				echo "Gagal insert data";
				exit;
			}
		}
	}
?>
