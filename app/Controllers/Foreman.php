<?php

namespace App\Controllers;

class Foreman extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang | WIRO',
        ];

        return view('foreman/index', $data);
    }
}
