<?php
include "koneksi.php";
$id=$_POST['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$semester=$_POST['semester'];
$jk=$_POST['jk'];
$ket=$_POST['ket'];
mysqli_query($koneksi,"UPDATE mahasiswa SET nama = '$nama',
							jurusan='$jurusan',
							semester='$semester',
							jeniskelamin='$jk',
							komentar='$ket'    
                           WHERE id       = '$id'");
 header('location:index.php');
 ?>