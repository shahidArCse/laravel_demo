<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        if(Auth::check()){
            return redirect('/dashboard');
         } 
    }

    public function index(REQUEST $req){
    
        $data['title'] = "welcome";
        if( $req->all() ){
            $validated = $req->validate([
                'email' => 'required|max:255',
                'password' => 'required',
            ]);
            if (Auth::attempt($validated)) {
                $req->session()->regenerate();
                toastr()->success('Login successfully!');
                return redirect('/dashboard');
                // return redirect()->intended('dashboard');
            }else{
                // $req->session()->flash('error', 'You are entered wrong email or password'); 
                toastr()->error('You are entered wrong email or password');
                return back();
            }
            // $user = User::where(['email'=>$req->email,'role'=>'0'])->get();
            /* custom session authentication */
            
            // if(Hash::check($req->password,$user[0]->password)){
                
            //     $sessionArray = [
            //         'id'=>$user[0]->id,
            //         "email"=>$user[0]->email,
            //         'role'=>$user[0]->id,
            //     ];
            //     $req->session()->put(['admin_login'=> $sessionArray]);
            //     // $req->session()->flash('Messages', 'Task was successful!');
            //     return redirect('/dashboard');
            // }
            
        }
        // dd(Session::has('admin_login'));
        return view('admin/account/login',$data);
    }
}
