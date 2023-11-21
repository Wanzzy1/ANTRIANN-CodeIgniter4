<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | BMTI'
        ];
        return view('pages/home', $data);
    }


    public function live_preview()
    {
        $data = [
            'title' => 'live | BMTI'
        ];
        return view('pages/live_preview', $data);
    }

    public function aboutUs()
    {
        $data = [
            'title' => 'live | BMTI'
        ];
        return view('pages/aboutUs', $data);
    }


}