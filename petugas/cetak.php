<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Tanggal</th>
			<th>Nama Barang</th>
			<th>JumlahProduk</th>
			<th width="5%">Subtotal</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from penjualan INNER JOIN produk INNER JOIN detailpenjualan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['TanggalPenjualan']; ?></td>
			<td><?php echo $data['NamaProduk']; ?></td>
			<td><?php echo $data['JumlahProduk']; ?></td>
			<td>Rp. <?php echo $data['Subtotal']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>

