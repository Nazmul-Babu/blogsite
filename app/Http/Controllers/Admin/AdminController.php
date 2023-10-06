<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminLogin(){
        return view('admin/adminlogin');
    }
    public function Admin_login(){
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




    public function Admin(){
        $this->validate(request(),[
          'name'=>'required',
          'password'=>'required',
        ]);
        if(Auth::guard('admin')->attempt([
            'name'=>request('name'),
            'password'=>request('password'),
        ])){
            return to_route('createcategory');
        }else{
            return 'credential not matched';
        }
    }
}
