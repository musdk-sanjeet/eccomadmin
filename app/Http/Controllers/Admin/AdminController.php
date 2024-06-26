<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use validator;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data=$request->all();
            // echo "<pre>";print_r($data);die();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30',
            ];

            $customMessages=[
                'email.required'=> "Email is required",
                'email.email' =>"Valid Email is requird",
                'password' => "Password is required"
            ];
            $this->validate($request,$rules,$customMessages);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']]))
            {
                return redirect('/admin/dashboard');
            }else{
                return redirect()->back()->with("error_message","Invalid email or password!");
            }
        }
        return view('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
