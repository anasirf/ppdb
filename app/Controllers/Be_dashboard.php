<?php

namespace App\Controllers;

use App\Models\Msiswa;
use PhpParser\Node\Expr\Cast\Array_;

class Be_dashboard extends BaseController
{
    public function index()
    {
        $Msiswa = new Msiswa();
        $data = $Msiswa->findAll();
        return view(
            'be_dashboard/index',
            array(
                'data' => $data,
            )
        );
    }
}
