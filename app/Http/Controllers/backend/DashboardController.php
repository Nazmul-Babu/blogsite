<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $data =array();
        $data['active_menu'] = 'dashboard';
        $data['page_title'] = 'Dashboard';
        return view('backend.pages.dashboard',compact('data'));
    }
}
