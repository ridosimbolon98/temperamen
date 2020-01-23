<?php 
  if($_SESSION['status']!="login"){
    header("location:../login/?pesan=belum_login");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>tambah artikel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/asset_artikel/css/input_artikel.css">
</head>
<body>
	<center>
		<h2>Tambah Artikel</h2>
	</center>
	<form id="form_input" action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post" >
		<table style="margin:20px auto;">
			<tr>
				<td><h3>Judul Artikel </h3></td>
				<td><textarea type="text" name="judul" cols="140"></textarea></td>
			</tr>
			<tr>
				<td><h3>Isi Artikel </h3></td>
				<td><textarea type="text" name="isi" rows="35" cols="140"></textarea></td>
			</tr>
			<tr>
				<td><h3>Tag Artikel </h3></td>
				<td><textarea type="text" name="tag" cols="140"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Tambah"><button><a href="<?php echo base_url(); ?>index.php/admin" style="text-decoration: none;">Kembali</a></button>
				</td>
			</tr>
			
		</table>
	</form>

</body>
</html>