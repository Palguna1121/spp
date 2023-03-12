<div>
    <div class="d-flex mb-2">
        <h4 class="text-capitalize">Buat petugas</h4>
    </div>
    <div class="card p-3">
        <form action="<?=BASE_URL?>/admin_petugas/store" method="post">
            <div class="mb-3">
                <label for="nama_petugas" class="form-label text-capitalize">Nama petugas</label>
                <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label text-capitalize">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-capitalize">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="<?=BASE_URL?>/admin/petugas" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</div>