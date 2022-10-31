<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        //$this -> middleware('auth')->except('mm');
    }

    public function showAdminName()
    {
        return 'Ahmed Emam';
    }

    public function mm()
    {
        return 'you are in mm';
    }

    public function mm1()
    {
        return 'you are in mm1';
    }

    public function mm2()
    {
        return 'you are in mm2';
    }

}