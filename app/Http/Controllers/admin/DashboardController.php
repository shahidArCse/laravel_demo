<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        $data['logout'] = route('logout');
        $data['title'] = "Hello, world!";
        return view('admin.dashboard',$data);
    }

    public function logout(){
        Session::flush();
        toastr()->success('Logout successfully!');
        return redirect('/admin');
    }
}
