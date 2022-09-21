<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Cookie\Cookie;

class Login extends BaseController
{
    private string $url;

    public function login()
    {
        return view('login/login');
    }

    public function auth_login()
    {
        $client = \Config\Services::curlrequest();
        $client->setHeader('Content-Type', 'application/json');
        $this->url = 'http://localhost:1993/v1/user/auth/login';

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $inputs = [
            'email' => $email, //'iha6r45f@duck.com',
            'password' => md5($password)
        ];
        $validation = service('validation');
        $validation->setRules(
            [
                'email' => 'required',
                'password' => 'required|min_length[4]'
            ],
            [
                'email' => [
                    'required' => 'Email không được để trống!',
                    'valid_email' => 'Email không hợp lệ!',
                ],
                'password' => [
                    'required' => 'Mật khẩu không được để trống!',
                    'min_length' => 'Mật khẩu phải có ít nhất 3 kí tự!',
                ],
            ]
        );

        //if something wrong, redirect to login page and show error message
        if (!$validation->run($inputs)) {
            $error_msg = $validation->getErrors();
            session()->setFlashdata('error', $error_msg);
            return redirect()->to(site_url('dang-nhap'));
        }

        $body = json_encode($inputs);
        $reps = $client->setBody("$body")->request('POST', $this->url);
        $result = json_decode($reps->getBody())->result;
        if ($result->code == HTTP_STATUS_UNAUTHORIZED) {
            session()->setFlashdata('auth_error', $result->msg);
            return redirect()->to(site_url('dang-nhap'));
        }
        set_cookie('token', $result->token, time() + 15 * 60);

        pre(get_cookie('token'));
    }

    public function register()
    {
        return view('login/register');
    }
}
