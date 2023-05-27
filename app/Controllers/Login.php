<?php

namespace App\Controllers;

use App\Models\Muser;

class Login extends BasefoController
{
    public function index()
    {
        //echo "login";die();
        return view('Login');
    }
    public function process()
    {
        $users = new Muser();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = $users->where([
            'username' => $username,
        ])->first();


        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    public function register()
    {
        return view('Register');
    }
}
