<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('shop/index');
    }
    public function detail()
    {
        return view('shop/view');
    }
}
