<?php

namespace App\Controllers;

class loketb extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Loket-B'
        ];
        return view('sidebar_loket/get_loketb', $data);
    }
}