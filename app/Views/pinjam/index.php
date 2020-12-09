
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class='mt-2'  style="text-align:center;">Daftar Peminjaman</h1>
            <a class="btn btn-outline-primary mb-3" href="/pinjam/create">+ Tambah Daftar Peminjaman</a>
        <table class="table table-bordered" >
            <thead class="thead-dark">
                <tr>
                 <th scope="col">No</th>
                 <th scope="col">Nama Peminjam</th>
                 <th scope="col">Judul Buku</th>
                 <th scope="col">Alamat</th>
                 <th scope="col">Telepon</th>
                 <th scope="col">Update Data</th>
                 <th scope="col">Delete Data</th>
                </tr>
            </thead>
        <tbody>
            <?php $i = 1 + (10 * ($currentPage - 1)); ?>
            <?php foreach ($data_pinjam as $data_pinjam):?>
                <tr>
                <th scope="row"><?= $i++;?></th>
                <td><?= $data_pinjam['nama']; ?></td>
                <td><?= $data_pinjam['judul']; ?></td>
                <td><?= $data_pinjam['alamat']; ?></td>
                <td><?= $data_pinjam['telepon']; ?></td>
                <td><a class="btn btn-outline-dark" href="/pinjam/edit/<?=$data_pinjam['id'];?>">Update</a></td>
                <td><a class="btn btn-outline-dark" href="/pinjam/delete/<?=$data_pinjam['id'];?>">Delete</a></td>
                
    
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        
        <?= $pager->links('data_pinjam', 'pinjam_pagination') ?>
    
        </div>
    </div>
</div>