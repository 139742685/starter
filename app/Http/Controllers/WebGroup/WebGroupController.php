<?php

namespace App\Http\Controllers\WebGroup;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class WebGroupController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth')->except('heyheyhey');
    }*/
    
    public function heyheyhey()
    {
        return 'hey hey hey';
    }

    public function heyheyhey_1()
    {
        return 'hey hey hey 1 1 1';
    }

    public function yuyu()
    {
        $rgrg = [];
        $rgrg['iid'] = '002';
        $rgrg['nname'] = 'Yasin Harbi';
        return view('bb' , $rgrg);
    }
}
