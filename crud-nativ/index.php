<?php
include "koneksi.php";
   ?>
   <a href=tambah.php><button type="submit" class="btn btn-primary">Tambah</button></a>
   <?php
     echo "<table border='1'>
          <thead>";
	 echo"              <tr>
                            <th>No</th>
							<th>Nama</th>
                            <th>Jurusan</th>
							<th>Semester</th>
							<th>Jenis Kelamin</th>
							<th>Komentar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead><tbody>";
      $tampil = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
    $no =1;
    while($r=mysqli_fetch_assoc($tampil)){
		echo "<tr><td>$no</td>
              <td>$r[nama]</td>
              <td>$r[jurusan]</td>
			  <td>$r[semester]</td>
			  <td>$r[jeniskelamin]</td>
			  <td>$r[komentar]</td>";
		  echo"       <td>
					<a title='Edit Data' href='edit.php?id=$r[id]'>Ubah</a>
					<a title='Hapus Data' href=hapus.php?id=$r[id]>Hapus</a>
				</td></tr>";
      $no++;
    }
    	echo "</table><br/><hr>";