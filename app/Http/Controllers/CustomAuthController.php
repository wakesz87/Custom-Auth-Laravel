<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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
               'username' => 'required|max:12|unique:users',
               'email' => 'required|email',
               'password' => 'required|min:5|max:12',
               'lastname' => 'required|max:25',
               'firstname' => 'required|max:25',
               'birthdate' => 'required|date_format:Y-m-d|after_or_equal:1920-01-01',
               'birthplace' => 'required|max:25',
               'city' => 'required|max:25',
               'postalcode' => 'required|max:10',
               'adress' => 'required|max:25'
          ]);

          $user = new User();
          $user->username = $request->username;
          $user->email = $request->email;
          $user->password =  Hash::make($request->password);
          $user->lastname = $request->lastname;
          $user->firstname = $request->firstname;
          $user->birthdate = $request->birthdate;
          $user->birthplace = $request->birthplace;
          $user->city = $request->city;
          $user->postalcode = $request->postalcode;
          $user->adress = $request->adress;
          $res = $user->save();
          if ($res) {
               return back()->with('success', 'A regisztrációd sikerült!');
          } else {
               return back()->with('failed', 'A regisztrációd sikertelen!');
          }
     }

     public function loginUser(Request $request)
     {
          $request->validate([
               'username' => 'required|max:12',
               'password' => 'required|min:5|max:12'
          ]);

          $user = User::where('username', '=', $request->username)->first();
          if ($user) {
               if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('loginId', $user->id);
                    return redirect('dashboard');
               } else {
                    return back()->with('failed', 'Hibás jelszó');
               }
          } else {
               return back()->with('failed', 'Ez a felhasználónév nem regisztrált!');
          }
     }
     public function dashboard(){
          return "Welcome";
     }
}
