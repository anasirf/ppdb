<?php

namespace App\Controllers;

use App\Models\Mibu;
use App\Models\Msiswa;

class Be_ibu extends BaseController
{
    public function index()
    {

        $session = session();
        $id_siswa =   $session->get('id_siswa'); //ini tetap
        $Msiswa = new Msiswa(); // model disesuaikan dengan nama tabel
        $Mibu = new Mibu();
        $siswa = $Msiswa->find($id_siswa); //disesuaikan dengan nama tabel 
        $ibu = $Mibu->find($id_siswa); //disesuaikan dengan nama tabel 
        $data = [
            'siswa' => $siswa,
            'ibu' => $ibu,
        ];
        return view('be_ibu/index');
    }
}
