<?php 
$siswa = $data['siswa'];
$idKelas = $siswa['id_kelas'];
$idPembayaran = $siswa['id_pembayaran'];
?>

<div>
    <div class="d-flex mb-2">
        <h4 class="text-capitalize">Edit siswa</h4>
    </div>
    <div class="card p-3">
        <form action="<?=BASE_URL?>/admin_siswa/update/<?= $siswa['id_pengguna']?>" method="post">
            <div class="mb-3">
                <label for="nis" class="form-label text-capitalize">Nis</label>
                <input type="text" name="nis" id="nis" class="form-control" value="<?=$siswa['nis']?>">
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label text-capitalize">Nisn</label>
                <input type="text" name="nisn" id="nisn" class="form-control" value="<?=$siswa['nisn']?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label text-capitalize">nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?=$siswa['nama']?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label text-capitalize">username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?=$siswa['username']?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-capitalize">password</label>
                <input type="text" name="password" id="password" class="form-control" value="<?=$siswa['password']?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label text-capitalize">alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?=$siswa['alamat']?>">
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label text-capitalize">telepon</label>
                <input type="number" name="telepon" id="telepon" class="form-control" value="<?=$siswa['telepon']?>">
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label text-capitalize">angkatan</label>
                <input type="number" name="angkatan" id="angkatan" class="form-control" value="<?=$siswa['angkatan']?>">
            </div>
            <div class="mb-3">
                <label for="id_kelas" class="form-label text-capitalize">kelas</label>
                <select name="id_kelas" id="id_kelas" class="form-control">
                    <?php foreach($data['all_kelas'] as $kelas): ?>
                        <option value="<?= $kelas['id_kelas']?>" <?php if($kelas['id_kelas'] === $idKelas ): ?> selected <?php endif;?> ><?= $kelas['nama_kelas']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_pembayaran" class="form-label text-capitalize">sPP</label>
                <select name="id_pembayaran" id="id_pembayaran" class="form-control">
                    <?php foreach($data['all_pembayaran'] as $pembayaran): ?>
                        <option value="<?= $pembayaran['id_pembayaran']?>" <?php if($pembayaran['id_pembayaran'] === $idPembayaran ): ?> selected <?php endif;?> ><?= $pembayaran['tahun_ajaran']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="<?=BASE_URL?>/admin/siswa" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</div>