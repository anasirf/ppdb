<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\Muser;

class auth extends BasefoController
{

    public function index()
    {
        return view('Be_dashboard/index');
    }

    public function login()
    {
        $input = $this->request->getPost();

        $users = new Muser();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');


        $dataUser = $users->where('email', $username)->first();


        if ($dataUser) {
            // if (password_verify($password, $dataUser->password)) {

            session()->set([
                'email' => $dataUser['email'],
                'nama' => $dataUser['nama'],
                'role' => $dataUser['role'],
                'logged_in' => TRUE
            ]);


            // $session = session();

            return redirect()->to('be_dashboard');
            // } else {
            //     session()->setFlashdata('error', 'Username & Password Salah');
            //     return redirect()->back();
            // }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->to('/');
            // return redirect()->back();
        }
    }

    public function logout()
    {

        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }

    public function register()
    {
        $email = $this->request->getVar('email');
        $no_ppdb = $this->request->getVar('no_ppdb');
        $password = $this->request->getVar('password');
        $repassword = $this->request->getVar('repassword');
        print_r($email);
    }
    public function register_store()
    {
        $email = $this->request->getVar('email');
        $no_ppdb = $this->request->getVar('no_ppdb');
        $password = $this->request->getVar('password');
        $repassword = $this->request->getVar('repassword');

        $check_ppdb = true;
        //$check_ppdb = false;
        if ($check_ppdb == false) { //kondisi menyatakan no ppdb sudah didaftarkan atau tidak ada
            return redirect()->to('/auth/register_failed');
        }

        $rules = [
            'email' => 'required|valid_email',
            'no_ppdb' => 'required|',
            'password' => 'required|min_length[6]',
            'repassword' => 'required|min_length[6]|matches[password]'
        ];

        if ($this->validate($rules)) { //jika inputan sesuai dengan validasi
            // controller code
            $db = new Muser();
            $Muser = new Muser();
            $Msiswa = new Msiswa();

            $Muser->transStart();
            //insert table siswa
            $data = [
                'no_ppdb'       => $no_ppdb,
                // 'username' => 'darth',
                // 'email'    => 'd.vader@theempire.com',
            ];
            $Msiswa->save($data);//esekusi database
            $id_siswa = $Msiswa->insertId();


            $dataUser = [
                'id_siswa'       => $id_siswa,
                'email'       => $email,
                'role'       => 2,
                'password'       => $password,
            ];
            $Muser->save($dataUser);//esekusi database
            $id_user = $Muser->insertId();


            $Muser->transComplete();

        

            if ($Muser->transStatus() === FALSE) {
                return redirect()->to('/login/register');
            }

            return redirect()->to('/auth/register_success');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }


    public function register_success()
    {
        return view('auth/success');
    }
    public function register_failed()
    {
        return view('auth/failed');
    }
}
