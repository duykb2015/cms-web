<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    private $user_info_v1 = 'http://localhost:1993/v1/user/getinfo';
    private $user_update_v1 = 'http://localhost:1993/v1/user/update';

    public function index()
    {
        $token = get_cookie('token');
        if (!$token) {
            return view('home/index');
        }
        $this->client->setHeader('Authorization', $token);
        $resp = $this->client->request('GET', $this->user_info_v1);
        $result = json_decode($resp->getBody())->result;

        $data['user'] = $result;
        $data['menu'] = cache()->get('menu');
        return view('user/index', $data);
    }

    public function update()
    {
        $user_id      = $this->request->getPost('id');
        $old_password = $this->request->getPost('old_password');
        $new_password = $this->request->getPost('new_password');
        $name         = $this->request->getPost('name');
        $phone        = $this->request->getPost('phone');
        $address      = $this->request->getPost('address');

        $datas = [
            'id'           => $user_id,
            'name'         => $name,
            'phone'        => $phone,
            'address'      => $address
        ];
        //if user want to change their password
        if (!empty($old_password)) {
            $validation = \Config\Services::validation();
            $validation->setRuleGroup('user');

            $input['password'] = $new_password;
            if (!$validation->run($input)) {
                cache()->save('error', $validation->getErrors()['password'], 3);
                return redirect()->to('tai-khoan');
            }
            $datas['old_password'] = md5($old_password);
            $datas['new_password'] = md5($new_password);
        }
        $token = get_cookie('token');
        if (!$token) {
            return view('home/index');
        }
        $this->client->setHeader('Authorization', $token);

        $body = json_encode($datas);
        $resp = $this->client->setBody("$body")->request('PUT', $this->user_update_v1);
        $result = json_decode($resp->getBody());
        if ($result->code != HTTP_STATUS_OK) {
            cache()->save('error', $result->error, 10);
        }
        return redirect()->to('tai-khoan');
    }
}
