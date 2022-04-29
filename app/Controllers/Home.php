<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $content = parse_ini_file("site_data.ini", true);
        return view('home');
    }
}
