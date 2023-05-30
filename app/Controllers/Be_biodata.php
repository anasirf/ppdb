<?php

namespace App\Controllers;

use App\Models\Msiswa;

class Be_biodata extends BaseController
{
    public function index()
    {
        $session = session();
        $id_siswa = $session->get('id_siswa'); //ini tetap

        $Msiswa = new Msiswa(); // model disesuaikan dengan nama tabel
        $siswa = $Msiswa->find($id_siswa); //disesuaikan dengan nama tabel 

        $data = [
            'siswa' => $siswa,
        ];

        return view('be_biodata/index', $data);
    }

    public function store()
    {
        $Msiswa = new Msiswa();

        $id = $this->request->getVar('id');
        $nama = $this->request->getVar('nama');
        $nama_lengkap = $this->request->getVar('nama_lengkap');
        $jk = $this->request->getVar('jk');
        $nik = $this->request->getVar('nik');
        $nokk = $this->request->getVar('nokk');



        // $rules = [
        //     'email' => 'required|valid_email',
        //     'no_ppdb' => 'required|',
        //     'password' => 'required|min_length[6]',
        //     'repassword' => 'required|min_length[6]|matches[password]'
        // ];    

        // if ($this->validate($rules)) { //jika inputan sesuai dengan validasi
        // controller code

        $Msiswa->transStart();
        //insert table siswa
        $data = [
            'id' => $id,
            'nama' => $nama,
            'nama_lengkap' => $nama_lengkap,
            'jk' => $jk,
            'nik' => $nik,
            'nokk' => $nokk,
        ];
        $Msiswa->save($data); //esekusi database



        $Msiswa->transComplete();


        if ($Msiswa->transStatus() === FALSE) {
            return redirect()->to('/be_biodata');
        }

        return redirect()->to('/be_biodata');
        // return redirect()->to('/auth/login'); //ini jika minta langsung ke login
        // } else {
        //     // $data['validation'] = $this->validator;
        //     return redirect()->to('/be_biodata');

        // }
    }

}