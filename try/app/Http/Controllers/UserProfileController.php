<?php

namespace App\Http\Controllers;

use Faker\Provider\Base;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class UserProfileController extends BaseController
{
    public function show ()
    {
        echo "Ahmad Fadlih Wahyu Sardana";
        echo "TI-2H";
    
    }
}