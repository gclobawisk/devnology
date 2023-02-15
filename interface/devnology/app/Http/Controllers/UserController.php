<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Links;
use App\Models\Blogs;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getInfoUser(){

    
        return view('perfil');

    }



}
