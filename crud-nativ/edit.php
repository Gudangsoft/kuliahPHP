 <?php
 include "koneksi.php";
   $edit = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$_GET[id]'");
    while ($r    = mysqli_fetch_assoc($edit)){
  $id=$r['id'];
	$nim=$r['nim'];
	$nama=$r['nama'];
	$jurusan=$r['jurusan'];
  $semester=$r['semester'];
  $jk=$r['jeniskelamin'];
  $komen=$r['komentar'];
	}
 ?>
<div class="row">
 <div class="col-md-12">
  <div class="col-md-11"></div>
    <a href=index.php><button type="submit" class="btn btn-danger">Batal</button></a>
   <div class="box box-info">
     <div class="box-header with-border">
<span class='title'>Edit Mahasiswa</span><hr><br/>
	<form class='form-horizontal' id='registerHere' method='post' action='exec-edit.php'>
    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
	 <div class="box-body">
       <div class="form-group">
        <label for="dua" class="col-sm-2 control-label">NIM</label>
         <div class="col-sm-2">
          <input type="text" class="form-control" value="<?php echo $nim; ?>" disabled="disabled" >	
         </div>
       </div>
       <div class="form-group">
        <label for="tiga" class="col-sm-2 control-label">Nama Mahasiswa</label>
          <div class="col-sm-4">
           <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
          </div>
       </div>
        <div class="form-group">
        <label class="col-xs-2 control-label">Jurusan</label>
        <div class="col-xs-2 selectContainer">
            <select class="form-control" name="jurusan">
              <option value="S1-Grafis">S1-Grafis</option>
               <option value="D4-Akutansi">D4-Akutansi</option>
               <option value="D4-MI">D4-MI</option>
               <option value="D3-Akutansi">D3-Akutansi</option>
            </select>
        </div>
    </div> 
    
    <div class="form-group">
        <label for="tiga" class="col-sm-2 control-label">Semester</label>
          <div class="col-sm-4">
           <input type="text" class="form-control" value="<?php echo $semester; ?>" name="semester">
          </div>
       </div>
       <div class="form-group">
        <label class="col-xs-2 control-label">Jenis Kelamin</label>
        <div class="col-xs-2 selectContainer">
            <select class="form-control" name="jk">
              <option value="Laki-Laki">Laki-Laki</option>
               <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div> 
    <div class="form-group">
        <label for="tiga" class="col-sm-2 control-label">Keterangan</label>
          <div class="col-sm-4">
           <textarea name="ket" rows="5" cols="50"><?php echo $komen; ?></textarea>
          </div>
       </div>
     <div class="form-group">
        
          <div class="col-sm-4">
           <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
       </div>
     </div>
<!-- /.box-body -->
<div class="box-footer">
 <div class="col-sm-5">
    
 </div> 
</div>
<!-- /.box-footer -->
	</form>
    </div>
  </div>
 </div>
</div>