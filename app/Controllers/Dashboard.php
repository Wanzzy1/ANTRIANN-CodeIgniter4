<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    { 
        $data = [
        'title' => 'Dashboard'
    ];
        return view('sidebar_dashboard/get', $data);
    }

    public function rekap_antrian()
    {
        $data = [
            'title' => 'Rekapan Antrian'
        ];
        return view('/sidebar_dashboard/rekap_antrian', $data);
    }
 }