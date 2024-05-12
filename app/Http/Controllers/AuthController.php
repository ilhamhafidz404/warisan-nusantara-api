<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $user = User::whereUsername($request->username)->wherePassword($request->password)->first();

        if (!$user) {
            return response()->json([
                "data" => $user,
                "message" => "Failed to Login, wrong username or password",
                "status_code" => "WN-02"
            ]);
        }

        return response()->json([
            "data" => $user,
            "message" => "Login success",
            "status_code" => "WN-01"
        ]);
    }
}
