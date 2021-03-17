<?php
include "koneksi.php";
 mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id='$_GET[id]'");
echo "<script>alert('Data Berhasil Dihapus!')";
header('location:index.php');
?>