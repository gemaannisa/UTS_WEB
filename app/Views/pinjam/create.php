<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class='my-3'>Tambah Daftar Peminjaman</h2>
            <form action="/pinjam/save" method="post">
            <?php csrf_field();?>
    <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Peminjam</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" name="judul"value="<?= old('judul');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="alamat"value="<?= old('alamat');?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="telepon">Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telepon" name="telepon"value="<?= old('alamat');?>">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambahkan</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>