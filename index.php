<title>Upload Gambar via AJAX</title>
<style>
body{
font-family:Arial;
font-size:12px;
}
input{
border:1px solid #FFCC00;
padding:8px;
cursor:pointer;
}
</style>
<script type="text/javascript" src="jquery.min.js"></script>
<script>
function uploadGambar(){
	$("#tampil-gambar").html("<img src='loading.gif'> Gambar sedang di-upload...");
}
function tampilkanGambar(alamat){
	var gbr = new Image();
	$(gbr).load(function(){
		$(this).hide();
		$("#tampil-gambar").html($(this));
		$(this).fadeIn();
	}).attr('src', alamat)
	.error(function(){
		alert("Tidak berhasil mengambil gambar");
	});
}
</script>
<form name="frm" method="post" enctype="multipart/form-data" target="media-upload" onsubmit="uploadGambar();" action="upload.php">
Pilih Gambar : <input name="gambar" type="file" /><input type="submit" name="upload" value="Upload Gambar" />
</form>
<div id="tampil-gambar"></div>
<iframe name="media-upload" id="media-upload" style="display:none;"></iframe>