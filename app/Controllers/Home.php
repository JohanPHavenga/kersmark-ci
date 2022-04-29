<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($lang="en")
    {
        $data['google_api']=getenv('GOOGLE_API');
        if ($lang=="af") {
            $file_to_parse="site_data_afr.ini";
            $data['lang_switch']="en";
        } else {
            $file_to_parse="site_data_eng.ini";
            $data['lang_switch']="af";
        }
        $data['content'] = parse_ini_file("./".$file_to_parse, true);
        wts($data,1);
        return view('home', $data);
    }
}
