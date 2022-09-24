<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Cookie\Cookie;

class Login extends BaseController
{
    private $authLoginV1    = 'http://localhost:1993/v1/user/auth/login';
    private $authRegisterV1 = 'http://localhost:1993/v1/user/auth/register';

    public function login()
    {
        return view('login/login');
    }

    public function auth_login()
    {
        $client = \Config\Services::curlrequest();
        $client->setHeader('Content-Type', 'application/json');

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $inputs = [
            'email' => $email, //'iha6r45f@duck.com',
            'password' => $password
        ];
        //validation
        $validation = \Config\Services::validation();
        $validation->setRuleGroup('login');

        //if something wrong, redirect to login page and show error message
        if (!$validation->run($inputs)) {
            $data['error'] = $validation->getErrors();
            return view('login/login', $data);
        }

        //Need to encrypt password before sending

        $datas = [
            'email' => $email,
            'password' => md5($password)
        ];

        $body   = json_encode($datas);
        $reps   = $client->setBody("$body")->request('POST', $this->authLoginV1);
        //Not check error yet
        $result = json_decode($reps->getBody())->result;

        if ($result->code != HTTP_STATUS_OK) {
            $data['auth_error'] = $result->msg;
            return view('login/login', $data);
        }

        //set cookie expired after 15 mins
        set_cookie('token', $result->token, time() + 15 * 60);
        return redirect()->to('/');
    }

    public function register()
    {
        return view('login/register');
    }

    public function auth_register()
    {
        $client = \Config\Services::curlrequest();
        $client->setHeader('Content-Type', 'application/json');

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $username = $this->request->getPost('username');
        $address  = $this->request->getPost('address');
        $phone    = $this->request->getPost('phone');

        $inputs = [
            'email' => $email, //'iha6r45f@duck.com',
            'password' => $password
        ];
        //validation
        $validation = \Config\Services::validation();
        $validation->setRuleGroup('login');

        //if something wrong, redirect to login page and show error message
        if (!$validation->run($inputs)) {
            $data['error'] = $validation->getErrors();
            return view('login/login', $data);
        }

        //Need to encrypt password before sending
        $datas = [
            'email'    => $email,
            'password' => md5($password),
            'username' => $username,
            'address'  => $address,
            'phone'    => $phone
        ];
        $body = json_encode($datas);
        $reps = $client->setBody("$body")->request('POST', $this->authRegisterV1);
        $result = json_decode($reps->getBody())->result;

        if ($result->code != HTTP_STATUS_OK) {
            $data['auth_error'] = $result->msg;
            return view('login/register', $data);
        }

        $data['success'] = 'Đăng ký thành công, giờ bạn có thể đăng nhập';
        return view('login/register', $data);
    }
}
