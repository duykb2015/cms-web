<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Cart extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('shop/index');
    }
    public function add()
    {
        return $this->respond([
            "success" => "ok",
        ]); 
    }
}
