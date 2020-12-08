<div class="container">
    <div class="row">
    <?php foreach($buku as $buku) { ?>
        <div class="col-8">
            <h2 class='my-3'>Edit Daftar Buku</h2>
            <form action="<?php echo base_url().'buku/update'; ?>" method="post">
            <?php csrf_field();?>
    <div class="form-group row">
    <label for="nomor" class="col-sm-2 col-form-label">Nomor Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nomor" name="nomor"autofocus value="<?= $buku['nomor']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $buku['nama']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label">Stok Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stok" name="stok"value="<?= $buku['stok']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit"value="<?= $buku['penerbit']; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $buku['deskripsi']; ?></textarea>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
</form>
        </div>
        <?php } ?>
    </div>
</div>