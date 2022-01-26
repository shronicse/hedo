<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function registerform(){

        return view('admin.adminregister');

    }
    public function registerprocess(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',

        ]);

        $data=[
            'name'=>$request->input('name'),
            'email'=>mb_strtolower($request->input('email')),
            'phone'=>$request->input('phone'),
            'password'=>bcrypt($request->input('password')),
        ];
        try{
            Admin::create($data);
            return redirect()->route('adminlogin')->with('success','Registration successfull.');
        }
        catch (Exception $e){
            return redirect()->back();

        }



    }

    public function loginform(){

        return view('admin.adminlogin');

    }
    public function loginprocess(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->except(['token']);
        auth()->attempt($credentials);
        return redirect()-route('adminHome');
    }
}
