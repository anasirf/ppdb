<?php

namespace App\Controllers;

use App\Models\Msiswa;
use PhpParser\Node\Expr\Cast\Array_;

class Be_peserta extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role');

        echo "<pre>";
        var_dump($role);
        echo "</pre>";
        die();
 /*
        $Msiswa = new Msiswa();
        $data = $Msiswa->findAll();
        return view(
            'be_peserta/index',
            array(
                'data' => $data,
            )
        );
        */
    }
}
