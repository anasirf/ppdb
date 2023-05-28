<?php

namespace App\Controllers;

use App\Models\Msiswa;

class Be_biodata extends BaseController
{
    public function index()
    {
        $session = session();
        $id_siswa =   $session->get('id_siswa'); //ini tetap

        $Msiswa = new Msiswa(); // model disesuaikan dengan nama tabel
        $siswa = $Msiswa->find($id_siswa); //disesuaikan dengan nama tabel 

        $data = [
            'siswa' => $siswa,
        ];

        return view('be_biodata/index', $data);
    }
}
