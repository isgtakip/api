<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    use ApiResponser;

    //
    public function register(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email']
        ]);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }



        public function login(Request $request){
        $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');



        if (Auth::attempt($credentials)) {


        return $this->success([
                    'token' => auth()->user()->createToken('API Token')->plainTextToken
                ]);


        //return response()->json(Auth::user(), 200);
        }



         throw ValidationException::withMessages([
         'email' => 'Email ve Şifre Sistemde Kayıtlı Değil.'
          ]);


            }

 public function logout(Request $request)
 {
     Auth::logout();

     $request->session()->invalidate();

     $request->session()->regenerateToken();
 }

 public function me(Request $request)
 {
     return response()->json([
         'data' => $request->user(),
     ]);
 }


 public function token(Request $request){


     $request->validate([
         'email' => 'required|email',
         'password' => 'required',
         'device_name' => 'required',
     ]);

     $user = User::where('email', $request->email)->first();

     if (! $user || ! Hash::check($request->password, $user->password)) {
         throw ValidationException::withMessages([
             'email' => ['The provided credentials are incorrect.'],
         ]);
     }

     return $user->createToken($request->device_name)->plainTextToken;



 }
}
