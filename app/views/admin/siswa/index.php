<div>
    <div class="p-3 d-flex justify-content-between">
        <h4 class="text-gray-900 text-capitalize">Daftar siswa</h4>
        <a href="<?= BASE_URL?>/admin_siswa/create" class="btn btn-success text-capitalize">Tambah siswa</a>
    </div>
    <div class="card p-3">
        <div class="table-responsive">
            <div class="alert alert-primary">Berikut adalah daftar siswa dalam sistem</div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['all_siswa'] as $siswa):?>
                    <tr>
                        <td><?= $siswa['nis'] ?></td>
                        <td><?= $siswa['nisn'] ?></td>
                        <td><?= $siswa['nama'] ?></td>
                        <td><?= $siswa['alamat'] ?></td>
                        <td><?= $siswa['telepon'] ?></td>
                        <td>
                            <a href="<?= BASE_URL?>/admin_siswa/edit/<?= $siswa['id_pengguna']?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL?>/admin_pengguna/destroy/<?= $siswa['id_pengguna']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>