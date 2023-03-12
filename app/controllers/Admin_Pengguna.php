<?php

class Admin_Pengguna extends AdminController
{
    public function destroy($idPengguna)
    {
        $db = new Database;
        $pengguna = $db->query('SELECT * FROM pengguna WHERE id_pengguna = :id_pengguna')
                        ->bind(':id_pengguna',$idPengguna)
                        ->first();

        $db->query('DELETE FROM pengguna WHERE id_pengguna = :id_pengguna')
            ->bind(':id_pengguna',$idPengguna)
            ->execute();

        Flasher::set('success', 'Berhasil Menghapus Pengguna');
        
        if($pengguna['role'] == SISWA_ROLE){
            return redirect('admin_siswa');
        }

        return redirect('admin_petugas');
    }
}