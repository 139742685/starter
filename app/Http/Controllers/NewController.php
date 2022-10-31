<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function print()
    {
        return 'print print print print';
    }

    public function insert()
    {
        return 'Insert Doctor';
    }

    public function delete()
    {
        return 'Delete Course';
    }
}
