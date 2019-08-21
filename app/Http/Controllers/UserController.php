<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function login(Request $request){
        // dd($request);
    	$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required|min:4'
    	]);
        
        if(Auth::attempt([ 'email' => $request->input('email'), 'password' => $request->input('password')]))
        {
    		return redirect()->route('dashboard');
        }
        return back();
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('landing');
    }
}
