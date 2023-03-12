<div>
    <div class="d-flex mb-2">
        <h4 class="text-capitalize">Buat pembayaran</h4>
    </div>
    <div class="card p-3">
        <form action="<?=BASE_URL?>/admin_pembayaran/store" method="post">
            <div class="mb-3">
                <label for="nominal" class="form-label text-capitalize">Nominal</label>
                <input type="text" name="nominal" id="nominal" class="form-control">
            </div>
            <div class="mb-3">
                <label for="tahun_ajaran" class="form-label text-capitalize">Tahun Ajaran</label>
                <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control">
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="<?=BASE_URL?>/admin/pembayaran" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</div>