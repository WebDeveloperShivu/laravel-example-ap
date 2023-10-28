<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('home');
    }
    //  public function register(Request $request){
        public function registrationform(){
            return view('registration');
        }

        public function userregistration(Request $request){
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'confirm_password' => 'required|same:password'

            ]);
            echo "<pre>";
            print_r($request->all());
        }

}
