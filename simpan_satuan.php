<?php
include "koneksi.php";

	$satuan			= $_POST["satuan"];

	
	if($satuan=="-"){
?>
		<script language="JavaScript">
		alert ('Isian satuan barang masih kosong. Silahkan diisi dahulu');
		document.location='isi-satuan.php';
		</script>
	<?php
	}

	else{
		$pilih="select * from satuan where Satuan ='$satuan'";
		$cek=mysqli_query($db,  $pilih);
		$jumlah_data = mysqli_num_rows($cek);
		
		if ($jumlah_data >= 1 ){
	?>
			<script language="JavaScript">
			alert('Satuan yang sama sudah digunakan');
			document.location='isi-satuan.php';
			</script>
		<?php
		}
		
		else{ 
			$query="insert into satuan (Satuan) values
				('$satuan')";
				
			$hasil=mysqli_query($db,$query);

			if ($hasil){
		?>
				<script language="JavaScript">
				alert('Proses Simpan Data Berhasil!');
				document.location='isi-satuan.php';
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