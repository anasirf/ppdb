<?php

namespace App\Controllers;

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
    
    public function register(){
        $email = $this->request->getVar('email');
        $no_ppdb = $this->request->getVar('no_ppdb');
        $password = $this->request->getVar('password');
        $repassword = $this->request->getVar('repassword');
        print_r($email);
    }
}
