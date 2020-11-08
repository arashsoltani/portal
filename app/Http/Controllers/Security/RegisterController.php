<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sentinel;
class RegisterController extends Controller
{
    public function register(){
        return view('security.register');
    }

    public function registerUser(Request $request){
//        dd($request);
        $validatedData = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'father_name'=>'required',
            'gender'=>'required',
            'national_code'=>'required |max:10 |unique:users',
            'phone'=>'required | max: 11',
            'email'=>'required | email',
            'password'=>'required',
        ]);
        $user = Sentinel::registerAndActivate($request->all());
        return redirect('login');
    }
}
