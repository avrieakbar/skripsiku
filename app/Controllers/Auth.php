<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->load->library('session');
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
        ];

        $respon_captcha = trim($this->input->post('g-recaptcha-response'));

        if ($respon_captcha !== '') {
            $keySecret = '6LdhpzUdAAAAAI9rxa8brCVmyaKxs4IIHyTYWd5n';

            $check = array(
                'secret' => $keySecret,
                'response' => $this->input->post('g-recaptcha-response')
            );

            $startProcess = curl_init();
            curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

            curl_setopt($startProcess, CURLOPT_POST, true);

            curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

            curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

            curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);
        } else {

            redirect('auth/login');
        }

        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register',
        ];

        return view('auth/register', $data);
    }

    public function forgot()
    {
        $data = [
            'title' => 'Forgot Password',
        ];

        return view('auth/forgot', $data);
    }
}
