<div>
    <div class="p-3 d-flex justify-content-between">
        <h4 class="text-gray-900 text-capitalize">Daftar petugas</h4>
        <a href="<?= BASE_URL?>/admin_petugas/create" class="btn btn-success text-capitalize">Tambah petugas</a>
    </div>
    <div class="card p-3">
        <div class="table-responsive">
            <div class="alert alert-primary">Berikut adalah daftar petugas dalam sistem</div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Petugas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['all_petugas'] as $petugas):?>
                    <tr>
                        <td><?= $petugas['nama_petugas'] ?></td>
                        <td>
                            <a href="<?= BASE_URL?>/admin_petugas/edit/<?= $petugas['id_pengguna']?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL?>/admin_pengguna/destroy/<?= $petugas['id_pengguna']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>