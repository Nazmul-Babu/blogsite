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
    public function createpost(){
        return view('admin.createpost');
    }
    public function createcategory(){
        return view('admin.createcategory');
    }
    public function singlepost(){
        return view('admin.singlepost');
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
