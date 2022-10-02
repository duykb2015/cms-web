<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    private $auth_login_v1    = 'http://localhost:1993/v1/user/auth/login';
    private $auth_register_v1 = 'http://localhost:1993/v1/user/auth/register';

    public function login()
    {
        return view('login/login');
    }

    public function auth_login()
    {
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
        $resp   = $this->client->setBody("$body")->request('POST', $this->auth_login_v1);
        //Not check error yet
        $result = json_decode($resp->getBody())->result;
        if ($result->code != HTTP_STATUS_OK) {
            $data['auth_error'] = $result->msg;
            return view('login/login', $data);
        }

        //set cookie expired after 15 mins
        $is_cookie_set = setcookie('token', $result->token); //time() + 15 * 60
        if (!$is_cookie_set) {
            $data['error'] = "Đã có lỗi xảy ra, vui lòng thử lại sau";
            return view('login/login', $data);
        }

        return redirect()->to('/');
    }

    public function register()
    {
        return view('login/register');
    }

    public function auth_register()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $name     = $this->request->getPost('name');
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
            'name'     => $name,
            'address'  => $address,
            'phone'    => $phone
        ];
        $body = json_encode($datas);
        $resp = $this->client->setBody("$body")->request('POST', $this->auth_register_v1);
        $result = json_decode($resp->getBody())->result;
        if ($result->code != HTTP_STATUS_OK) {
            $data['auth_error'] = $result->msg;
            return view('login/register', $data);
        }

        $data['success'] = 'Đăng ký thành công, giờ bạn có thể đăng nhập';
        return view('login/register', $data);
    }

    public function logout()
    {
        // delete_cookie('token');
        setcookie('token', '', time() - 60 * 60);
        return redirect()->to('dang-nhap');
    }
}
