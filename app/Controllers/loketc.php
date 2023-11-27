<?php

namespace App\Controllers;

class loketc extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Loket-C'
        ];
        return view('sidebar_loket/get_loketc', $data);
    }
}