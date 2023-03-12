<?php

class Admin_Siswa extends AdminController
{
    public function index()
    {
        $db = new Database;
        $all_siswa = $db->query('SELECT * FROM siswa')->get();
        $data = ['all_siswa' => $all_siswa];

        return $this->render('admin/siswa/index', $data);
    }

    public function create()
    {
        $db = new Database;
        $all_kelas = $db->query('SELECT * FROM kelas')->get();
        $all_pembayaran = $db->query('SELECT * FROM pembayaran')->get();

        $data = [
            'all_kelas' => $all_kelas, 
            'all_pembayaran' => $all_pembayaran
        ];

        return $this->render('admin/siswa/create', $data);
    }

    public function edit($idPengguna)
    {
        $db = new Database;
        $siswa = $db->query('SELECT siswa.*, pengguna.username, pengguna.password, pengguna.role FROM siswa INNER JOIN pengguna ON siswa.id_pengguna=pengguna.id_pengguna WHERE pengguna.id_pengguna = :id_pengguna')
            ->bind(':id_pengguna',$idPengguna)
            ->first();

        $all_kelas = $db->query('SELECT * FROM kelas')->get();
        $all_pembayaran = $db->query('SELECT * FROM pembayaran')->get();

        $data = [
            'siswa' => $siswa,
            'all_kelas' => $all_kelas, 
            'all_pembayaran' => $all_pembayaran
        ];
        return $this->render('admin/siswa/edit', $data);
    }

    public function store()
    {
        $db = new Database;
        $db->beginTransaction();

        $db->query('CALL storePengguna(:username, :password, :role)')
            ->bind(':username', $_POST['username'])
            ->bind(':password', $_POST['password'])
            ->bind(':role', SISWA_ROLE)
            ->execute();

        $pengguna = $db->query('CALL findPenggunaByUsernameAndPassword(:username, :password)')
                        ->bind(':username', $_POST['username'])
                        ->bind(':password', $_POST['password'])
                        ->first();

        $idPengguna = $pengguna['id_pengguna'];
        $insertQuery = 'INSERT INTO siswa (nis,nisn,nama,alamat,telepon,angkatan,id_pengguna,id_kelas,id_pembayaran) VALUES (:nis,:nisn,:nama,:alamat,:telepon,:angkatan,:id_pengguna,:id_kelas,:id_pembayaran)';

        $db->query($insertQuery)
            ->bind(':nis', $_POST['nis'])
            ->bind(':nisn', $_POST['nisn'])
            ->bind(':nama', $_POST['nama'])
            ->bind(':alamat', $_POST['alamat'])
            ->bind(':telepon', $_POST['telepon'])
            ->bind(':angkatan', $_POST['angkatan'])
            ->bind(':id_pengguna', $idPengguna)
            ->bind(':id_kelas', $_POST['id_kelas'])
            ->bind(':id_pembayaran', $_POST['id_pembayaran'])
            ->execute();

        Flasher::set('success', 'Berhasil membuat siswa');
        $db->commit();
        return redirect('admin_siswa');
    }

    public function update($idPengguna)
    {
        $db = new Database();

        $db->query('CALL updatePenggunaById(:username, :password, :role, :id_pengguna)')
            ->bind(':username', $_POST['username'])
            ->bind(':password', $_POST['password'])
            ->bind(':role', SISWA_ROLE)
            ->bind(':id_pengguna', $idPengguna)
            ->execute();

            $updateQuery = 'UPDATE siswa SET
            nama = :nama,
            nis = :nis,
            nisn = :nisn,
            alamat = :alamat,
            telepon = :telepon,
            id_kelas = :id_kelas,
            angkatan = :angkatan,
            id_pembayaran = :id_pembayaran 
            WHERE id_pengguna = :id_pengguna
        ';
        
        $db->query($updateQuery)
            ->bind(':nis', $_POST['nis'])
            ->bind(':nisn', $_POST['nisn'])
            ->bind(':nama', $_POST['nama'])
            ->bind(':alamat', $_POST['alamat'])
            ->bind(':telepon', $_POST['telepon'])
            ->bind(':angkatan', $_POST['angkatan'])
            ->bind(':id_pengguna', $idPengguna)
            ->bind(':id_kelas', $_POST['id_kelas'])
            ->bind(':id_pembayaran', $_POST['id_pembayaran'])
            ->execute();   

        Flasher::set('success', 'Berhasil mengupdate siswa!');
        return redirect('admin_siswa');
    }
}