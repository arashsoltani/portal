<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    //

    public function login(){
        return view('security.login');
    }

    public function postLogin(Request $request)
    {
//        dd($request->all());

        Sentinel::disableCheckpoints();
//        $errorMsgs = [
//            'national_code.required' => 'کد ملی را وارد کنید',
////            'national_code.numeric' => 'کد ملی اشتباه وارد شده است',
//            'password.required ' => 'رمز عبور را وارد کنید'
//        ];
//
//        $validator = Validator::make($request->all(), [
//            'national_code' => 'required',
//            'password' => 'required',
//        ], $errorMsgs);
//
//        if ($validator->fails()){
//            $returnData = array(
//                'status'=> 'error',
//                'message'=>'لطفا بازنگری کنید',
//                'errors'=>$validator->errors()->all()
//
//            );
//            return response()->json($returnData, 500);
//        }
//
//        $user = Sentinel::authenticate($request->all());
//
//        if (Sentinel::check()){
//            return redirect('/');
//        }
//        else{
////            $returnData = array(
////                'status'=> 'error',
////                'message'=>'لطفا بازرنگری کنید',
////                'errors'=>['نام کاربری و یا رمز عبور اشتباه است']
////
////            );
////            return response()->json($returnData, 500);
//            return redirect('/');
//        }


        $validatedData = $request->validate([
            'national_code' => 'required',
            'password' => 'required',
        ]);

//        $cre = [
//            'national_code'=> $request['national_code'],
//            'password'=>$request['password']
//        ];
//           Sentinel::authenticate($cre);
//           return redirect('/');
//        $user = Sentinel::authenticate($request->all());
//
//        if (Sentinel::check()) {
//        return redirect('/');
//        }

    }

    public function logout(){
        Sentinel::logout();
        return redirect('login');
    }
}
