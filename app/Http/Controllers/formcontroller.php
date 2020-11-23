<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function form(){
        return view('form');
        // return view('formdemo');
    }
    public function formsave(Request $req){
        dd($req->all());
    }



    public function mycaptcha(){
        return view('mycaptcha');
    }

    public function mycaptchapost(Request $request){
        $validatedData = $request->validate([
            'captcha' => 'required|captcha',
        ]);
        dd($request->all());
    }

    public function refreshcaptcha(){
        return response()->json(['captcha'=>captcha_img()]);
    }
}
