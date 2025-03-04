<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data =[
            'nama'=> 'Peanggan Pertama',

        ];
        UserModel::where ('username','customer-1')->update($data);

        $user = Usermodel::all();
        return view ('user',['data'=> $user]);
}
}