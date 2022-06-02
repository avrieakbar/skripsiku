<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WIRO'
        ];
        return view('pages/landing', $data);
    }

    public function home()
    {
        $data = [
            'title' => 'Pilih Form | WIRO'
        ];
        return view('pages/form', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function guidance()
    {
        $data = [
            'title' => 'Guidance | WIRO',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jalan Raya Wiguna Timur 80',
                    'kota' => 'Surabaya'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'PT. Terminal Teluk Lamong',
                    'kota' => 'Gresik'
                ]
            ]
        ];
        return view('pages/guidance', $data,);
    }

    public function form()
    {
        $data = [
            'title' => 'Form | WIRO',
        ];

        return view('pages/form', $data,);
    }

    public function lihatform()
    {
        $data = [
            'title' => 'Lihat Form | WIRO',
        ];
        return view('pages/lihatform', $data,);
    }

    public function register()
    {
        $data = [
            'title' => 'Register',
        ];

        return view('auth/register', $data);
    }

    public function filterdata()
    {
        $data = [
            'title' => 'Filter Data',
        ];

        return view('pages/filterdata', $data);
    }

    public function restoredata()
    {
        $data = [
            'title' => 'Restore Data',
        ];

        return view('pages/restoredata', $data);
    }
}
