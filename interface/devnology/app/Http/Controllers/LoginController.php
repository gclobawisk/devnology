<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\HTTP;
use Illuminate\Support\Facades\DB;



class LoginController extends Controller
{
    public function pageLogin(){

        if (Auth::check()) {
            return redirect('/');
        }
    
        return view('login');

    }

      
     
    public function auth(Request $request){

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            if(Auth::user()->usuario == 1){
                return redirect('/');
            }else if (Auth::user()->admin == 1){
                return redirect('/');
            }
        }else{
                return redirect('login');
            }
        }    
     
}
