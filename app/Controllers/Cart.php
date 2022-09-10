<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Cart extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $data['menu'] = cache()->get('menu');
        return view('cart/index', $data);
    }
    public function add()
    {
        return $this->respond([
            "success" => "ok",
        ]);
    }
}
