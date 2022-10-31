<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uuuuuController extends Controller
{
    public function ioio()
    {

        $data=[];
        $data['id'] = 5;
        $data['name'] = 'Maher';
        return view('aaaa' , $data);
        //return 'io io io io io';
    }

    public function insert()
    {
        return 'Insert U    ser';
    }

    public function cat()
    {
        return 'That is cat';
    }

    public function hundai()
    {
        return 'that car is HUNDAI';
    }

}
