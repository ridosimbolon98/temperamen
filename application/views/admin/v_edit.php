<?php 
  if($_SESSION['status']!="login"){
    header("location:../login/?pesan=belum_login");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit artikel</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>

	<?php foreach($artikel as $a){ ?>
		<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
			<table style="margin:20px auto;">
				<tr>
					<td>Judul Artikel </td>
					<input type="hidden" name="id" value="<?php echo $a->id ?>">
					<td><textarea type="text" name="judul" cols="140" ><?php echo $a->judul ?></textarea></td>
				</tr>
				<tr>
					<td>Isi Artikel </td>
					<td><textarea type="text" name="isi" rows="35" cols="140"><?php echo $a->isi ?></textarea></td>
				</tr>
				<tr>
					<td>Tag Artikel </td>
					<td><textarea type="text" name="tag" cols="140" ><?php echo $a->tag ?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>	
	<?php } ?>

</body>
</html>\