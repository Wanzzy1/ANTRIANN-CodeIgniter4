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

//     public function panggil_antrian()
//     {
//         return view('rekap_Antrian');
//     }
 }