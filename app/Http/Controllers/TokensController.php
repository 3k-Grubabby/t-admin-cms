<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TokensController extends Controller
{
    
    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        $validator = Validator::make($credentials,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'message'=>'Wrong validation',
                'errors'=> $validator->errors()
            ],422);
        }
        return null;
    }

}
