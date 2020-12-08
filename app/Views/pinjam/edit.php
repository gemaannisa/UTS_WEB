<div class="container">
    <div class="row">
    <?php foreach($data_pinjam as $pinjam) { ?>
        <div class="col-8">
          <h2 class='my-3'>Edit Daftar Peminjaman</h2>
          <form action="<?php echo base_url().'pinjam/update'; ?>" method="post">
          <?php csrf_field();?>
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Peminjam</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pinjam['nama']; ?>">
              </div>
            </div>
          <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $pinjam['judul']; ?>">
              </div>
            </div>
          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat"value="<?= $pinjam['alamat']; ?>">
              </div>
          </div>
          <div class="form-group row">
            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telepon" name="telepon"value="<?= $pinjam['telepon']; ?>">
              </div>
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