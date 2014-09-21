<?php
$nama_file = $_FILES['gambar']['name'];
$status = FALSE;
	if(!empty($_FILES['gambar']['tmp_name']))
	{
		$upload = move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$nama_file);
		if($upload)
		{
			$status = TRUE;
		}
	}
	
if($status==TRUE)
{
	?>
	<script>
		parent.tampilkanGambar('gambar/<?php echo $nama_file; ?>');
	</script>
	<?php
}
else
{
	?>
	<script>
		alert('Tidak berhasil melakukan upload');
	</script>
	<?php
}
?>