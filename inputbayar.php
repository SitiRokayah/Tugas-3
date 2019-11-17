<?php
include("koneksi.php"); //fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_tambah_bayar="insert into pembayaran(nama,merk,harga)values
	('".$_POST['nama']."',
	 '".$_POST['merk']."',
	 '".$_POST['harga']."')";
	 $proses_bayar=mysqli_query($rumah,$query_tambah_bayar);
if($proses_bayar){
	echo 'tambah data berhasil';
}else{
	echo mysqli_error($rumah);
}

}
?>


<form method="POST" action=""> <!---form untuk kirim data ke DB-->
<table border="1"> <!--nama harus sama dengan database-->
	<tr>
		<td>Nama</td>
		<td><input name="nama" type="text"></td>
	</tr>
	<tr>
		<td>Merk</td>
		<td><input name="merk" type="text"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>
		