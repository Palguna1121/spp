<?php

class Admin_Pembayaran extends AdminController
{
    public function index()
    {
        $db = new Database;

        $all_pembayaran = $db->query('SELECT * FROM pembayaran')->get();
        $data = ['all_pembayaran' => $all_pembayaran];

        return $this->render('admin/pembayaran/index', $data);
    }

    public function create()
    {
        return $this->render('admin/pembayaran/create');
    }

    public function edit($idPembayaran)
    {
        $db = new Database;
        $pembayaran = $db->query('SELECT * FROM pembayaran WHERE id_pembayaran = :id_pembayaran')
            ->bind(':id_pembayaran',$idPembayaran)
            ->first();

        $data = ['pembayaran' => $pembayaran];
        return $this->render('admin/pembayaran/edit', $data);
    }

    public function store()
    {
        $db = new Database;
        $db->query('INSERT INTO pembayaran (nama_pembayaran, kompetensi_keahlian) VALUES (:nama_pembayaran, :kompetensi_keahlian)')
            ->bind(':nama_pembayaran', $_POST['nama_pembayaran'])
            ->bind(':kompetensi_keahlian', $_POST['kompetensi_keahlian'])
            ->execute();

        Flasher::set('success', 'Berhasil membuat pembayaran');
        return redirect('admin_pembayaran');
    }

    public function update($idPembayaran)
    {
        $db = new Database();
        $db->query('UPDATE pembayaran SET nama_pembayaran = :nama_pembayaran, kompetensi_keahlian = :kompetensi_keahlian WHERE id_pembayaran = :id_pembayaran')
            ->bind(':nama_pembayaran', $_POST['nama_pembayaran'])
            ->bind(':kompetensi_keahlian', $_POST['kompetensi_keahlian'])
            ->bind(':id_pembayaran', $idPembayaran)
            ->execute();

        Flasher::set('success', 'Berhasil mengupdate pembayaran!');
        return redirect('admin_pembayaran');
    }

    public function destroy($idPembayaran)
    {
        $db = new Database;

        $db->query('DELETE FROM pembayaran WHERE id_pembayaran = :id_pembayaran')
            ->bind(':id_pembayaran', $idPembayaran)
            ->execute();

        Flasher::set('success', 'Berhasil Menghapus pembayaran!');
        return redirect('admin_pembayaran');
    }
}