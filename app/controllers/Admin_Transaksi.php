<?php

class Admin_Transaksi extends AdminController
{
    public function index()
    {
        $db = new Database;
        $all_siswa = $db->query('SELECT * FROM siswa')->get();
    }
}