<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    //Api url
    private string $url;
    
    public function index()
    {
        $menu_m = new MenuModel();
        $this->url = 'http://localhost:1993/v1/menu';
        $menu = $menu_m->get_menu($this->url);
        if ($menu) {
            $data['menu'] = $menu;
        }

        return view('home/index', $data);
    }
}
