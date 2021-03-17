<div class="row">
 <div class="col-md-12">
 <div class="col-md-11"></div>
    <a href=index.php><button type="submit" class="btn btn-danger">Batal</button></a>
   <div class="box box-info">
     <div class="box-header with-border"><hr>
<span class='title'>Tambah Pengguna</span><hr><br/>
	<form class='form-horizontal' id='registerHere' method='post' action='exec-tambah.php'>
	 <div class="box-body">
       <div class="form-group">
        <label for="dua" class="col-sm-2 control-label">NIM</label>
         <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="NIM" name="nim"  >	
         </div>
       </div>
       <div class="form-group">
        <label for="tiga" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama">
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
           <input type="text" class="form-control" name="semester">
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
           <textarea name="ket" rows="5" cols="50"></textarea>
          </div>
       </div>
    <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-2 selectContainer">
          
            <button type="submit" class="btn btn-primary">Simpan</button>
 
        </div>
    </div>  
     </div>

    
	</form>
 
    </div>
  </div>
 </div>
</div>