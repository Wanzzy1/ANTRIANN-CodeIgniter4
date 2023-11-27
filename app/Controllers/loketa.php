<?php

namespace App\Controllers;

class loketa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Loket-A'
        ];
        return view('sidebar_loket/get_loketa', $data);
    }

}