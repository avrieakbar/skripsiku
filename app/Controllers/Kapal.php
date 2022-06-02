<?php

namespace App\Controllers;

class Kapal extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang | WIRO',
        ];

        return view('kapal/index', $data);
    }
}