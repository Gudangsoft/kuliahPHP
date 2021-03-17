<?php
include "koneksi.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$semester=$_POST['semester'];
$jk=$_POST['jk'];
$ket=$_POST['ket'];
mysqli_query($koneksi,"insert into mahasiswa 
	values('','$nim','$nama','$jurusan','$semester','$jk','$ket')");
  header('location:index.php');
?>