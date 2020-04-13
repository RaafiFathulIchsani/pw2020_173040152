<?php 

require 'php/functions.php';

$makan = query("SELECT * FROM makanan ");




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

 <?php foreach($makan as $mkn): ?>

 	<div class="container" >
 	<tr>
 		<td><?php echo $angka; ?></td>
 		<td><img width = "200px" height= "200px" src="img/<?= $mkn["foto"]; ?>"></td>
 		<td class="gaya"><?= $mkn["nama"]; ?></td>
 		<td class="gaya"><?= $mkn["jenis"]; ?></td>
 		<td class="gaya"><?= $mkn["harga"]; ?></td>
 		<td class="gaya"><?= $mkn["kedaluarsa"] ?></td>
 	</tr>
 	</div>
 	<?php $angka++;?>
<?php endforeach; ?>

 </table>
 </body>
 </html>