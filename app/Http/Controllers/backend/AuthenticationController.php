<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function admin_login(){

        if(request()->isMethod('post')){
            $this->validate(request(),[
                'name'=>'required',
                'password'=>'required',
              ]);
              if(Auth::guard('admin')->attempt([
                  'name'=>request('name'),
                  'password'=>request('password'),
              ])){
                  return to_route('admin.dashboard');
                
              }else{
                  return 'credential not matched';
              }
        }
        return view('backend.authentication.login');
    }

    public function adminPostLogin(){}
}
