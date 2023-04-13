<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function register_view(){
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }



    public function login(Request $request)
    {
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(\Illuminate\Support\Facades\Auth::attempt($request->only('email', 'password'))){
           return redirect('home');
        }
        return redirect('login')->withError('please enter valid email and password');
    }

    public function store(Request $request){
        // validations 
        $request->validate([
            'name'=> 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Illuminate\Support\Facades\Hash::make($request->password)
        ]);
        // login here 
        if(\Illuminate\Support\Facades\Auth::attempt($request->only('email', 'password'))){
            return redirect('home');
        }
        return redirect('register')->withError('Error');

    }

    public function home(){
        return view('welcome'); 
    }
    public function logout(){
    \Illuminate\Support\Facades\Session::flush();
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}