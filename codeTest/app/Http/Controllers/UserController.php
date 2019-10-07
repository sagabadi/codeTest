<?php

namespace App\Http\Controllers;

use App\Users;
use Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function logout(){
        Session::flush();
        return redirect('Login')->with('alert','Kamu sudah logout');
    }

    public function postLogin(Request $request)
    {
        $email    = $request->email;
        $password = $request->password;
        if (Auth::attempt($request->only('email','password'))){
            $data     = Users::where('email',$email)->first();
            Session::put('name',$data->name);
            Session::put('type',$data->type);
            Session::put('email',$data->email);
            Session::put('login',TRUE);
            return redirect('/Dashboard');
        }
        return redirect('/Login');
        // $email    = $request->email;
        // $password = $request->password;
        // $data     = Users::where('email',$email)->first();
        // if($data){
        //     if(Hash::check($password,$data->password)){
        //         Session::put('name',$data->name);
        //         Session::put('type',$data->type);
        //         Session::put('email',$data->email);
        //         Session::put('login',TRUE);
        //         return redirect('/Dashboard');
        //     }
        //     else{
        //         return redirect('/Login')->with('alert','Password atau Email, Salah !');
        //     }
        // }
        // else{
        //     return redirect('/Login')->with('alert','Password atau Email, Salah!');
        // }
        }

    public function login()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regist');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user           =  new Users;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->name     = $request->name;
        $user->type     = $request->type;
        $user->remember_token = Str::random(60);
        $user->save();
        return redirect('/Login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {

    }
}
