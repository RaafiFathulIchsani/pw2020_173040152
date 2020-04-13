<?php 

$conn = mysqli_connect("localhost", "root", "") or die("KONEKSI KE DB GAGAL!");

// memilih database
mysqli_select_db($conn, "pw_173040152") or die("DATABASE SALAH!");

// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM makanan");




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas2_173040152</title>
 	<style type="text/css">
 		.gaya{
 			text-align: center;
 		}

 			
 
 	</style>
 </head>
 <body>
 	<table border="2" cellpadding="2" cellspacing="2">
 		<th>No</th>
 		<th>GAMBAR</th>
 		<th>NAMA MAKANAN</th>
 		<th>JENIS MAKANAN</th>
 		<th>HARGA</th>
 		<th>TGL KEDALUARSA</th>
 	<?php $angka = 1; ?>

 <?php while($makan = mysqli_fetch_assoc($result)) : ?>

 	<div class="container" >
 	<tr>
 		<td><?php echo $angka; ?></td>
 		<td><img width = "200px" height= "200px" src="img/<?= $makan["foto"]; ?>"></td>
 		<td class="gaya"><?= $makan["nama"]; ?></td>
 		<td class="gaya"><?= $makan["jenis"]; ?></td>
 		<td class="gaya"><?= $makan["harga"]; ?></td>
 		<td class="gaya"><?= $makan["kedaluarsa"] ?></td>
 	</tr>
 	</div>
 	<?php $angka++;?>
<?php endwhile; ?>

 </table>
 </body>
 </html>