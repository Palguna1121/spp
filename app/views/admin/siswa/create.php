<div>
    <div class="d-flex mb-2">
        <h4 class="text-capitalize">Buat Siswa</h4>
    </div>
    <div class="card p-3">
        <form action="<?=BASE_URL?>/admin_siswa/store" method="post">
        <div class="mb-3">
                <label for="nis" class="form-label text-capitalize">Nis</label>
                <input type="text" name="nis" id="nis" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label text-capitalize">Nisn</label>
                <input type="text" name="nisn" id="nisn" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label text-capitalize">nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label text-capitalize">username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-capitalize">password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label text-capitalize">alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label text-capitalize">telepon</label>
                <input type="number" name="telepon" id="telepon" class="form-control">
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label text-capitalize">angkatan</label>
                <input type="number" name="angkatan" id="angkatan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="id_kelas" class="form-label text-capitalize">kelas</label>
                <select name="id_kelas" id="id_kelas" class="form-control">
                    <?php foreach($data['all_kelas'] as $kelas): ?>
                        <option value="<?= $kelas['id_kelas']?>" ><?= $kelas['nama_kelas']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_pembayaran" class="form-label text-capitalize">sPP</label>
                <select name="id_pembayaran" id="id_pembayaran" class="form-control">
                    <?php foreach($data['all_pembayaran'] as $pembayaran): ?>
                        <option value="<?= $pembayaran['id_pembayaran']?>" ><?= $pembayaran['tahun_ajaran']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="<?=BASE_URL?>/admin/petugas" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</div>