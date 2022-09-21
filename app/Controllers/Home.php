<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    //Api url
    private string $url;

    public function indexs()
    {
        $menu_m = new MenuModel();
        $this->url = 'http://localhost:1993/v1/menu';
        $menu = $menu_m->get_menu($this->url);
        if ($menu) {
            $data['menu'] = $menu->result;
            cache()->save('menu', $menu->result, 9999);
        }

        $product_m = new ProductModel();
        $this->url = 'http://localhost:1993/v1/product/hotdeal';
        $product = $product_m->get_product($this->url);
        if ($product) {
            $data['product_hot_deal'] = $product->result;
            unset($product);
        }
        $this->url = 'http://localhost:1993/v1/product/line';
        $product = $product_m->get_product($this->url);
        if ($product) {
            $data['product_line'] = $product->result;
            unset($product);
        }
        return view('home/index', $data, ['saveData' => true]);
    }
    public function index()
    {
        return view('home/index');
    }
}
