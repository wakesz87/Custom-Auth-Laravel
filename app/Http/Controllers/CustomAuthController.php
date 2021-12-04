<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
     public function login()
     {
          return view("auth.login");
     }

     public function registration()
     {
          return view("auth.registration");
     }

     public function forgotPass()
     {
          return view("forgotpass");
     }

     public function registerUser(Request $request)
     {
         $request->validate([
              'username'=>'required', 
              'email'=>'required',
              'password'=>'required',
              'lastname'=>'required',
              'firstname'=>'required',
              'birthdate'=>'required',
              'birthplace'=>'required',
              'city'=>'required',
              'postalcode'=>'required',
              'adress'=>'required'
         ]);
     }
}
