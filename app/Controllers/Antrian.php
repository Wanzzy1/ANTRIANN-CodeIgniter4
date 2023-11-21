<?php

namespace App\Controllers;

use App\Models\LoketaModel;

class Antrian extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Antrian",
        ];
        return view('/nomor_antrian/indexx', $data);
    }
}