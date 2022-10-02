<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Cart extends BaseController
{
    use ResponseTrait;
    private $cart_v1 = 'http://localhost:1993/v1/cart';

    public function index()
    {
        $data['menu'] = cache()->get('menu');
        return view('cart/index', $data);
    }
    public function add()
    {
        return $this->respond([
            'percent_text' => "<b class=\"price\">15,490,000 VNĐ</b><span class=\"percent_text\">Tiết kiệm 9,500,000đ</span>",
            'active'       =>    15490000
        ]);
    }
    public function update()
    {
        return $this->respond([
            'status'       => true,
            'percent_text' => "<b class=\"price\">15,490,000 VNĐ</b><span class=\"percent_text\">Tiết kiệm 9,500,000đ</span>",
            'active'       =>    15490000
        ]);
    }
    public function remove()
    {
        return $this->respond([
            "success" => "ok",
        ]);
    }
}
