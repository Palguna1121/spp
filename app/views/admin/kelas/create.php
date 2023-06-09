<div>
    <div class="d-flex mb-2">
        <h4 class="text-capitalize">Buat Kelas</h4>
    </div>
    <div class="card p-3">
        <form action="<?=BASE_URL?>/admin_kelas/store" method="post">
            <div class="mb-3">
                <label for="nama_kelas" class="form-label text-capitalize">Nama Kelas</label>
                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
            </div>
            <div class="mb-3">
                <label for="kompetensi_keahlian" class="form-label text-capitalize">Kompetensi Keahlian</label>
                <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control">
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="<?=BASE_URL?>/admin/kelas" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</div>