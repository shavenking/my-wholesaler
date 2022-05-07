<?php

namespace App\Http\Controllers\Wholesaler;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('wholesaler.auth.login');
    }

    public function login(Request $request)
    {
        // todo we should add select to provide users to select country code
        $request->validate([
            'phone' => 'required|phone:AUTO,mobile',
            'sms_verification_code' => 'required',
        ]);

        // for now we assume phone number is verified
        // todo verify sms code
        // todo automatically create user if not exists
        $phoneNumber = phone($request->input('phone'))->formatE164();

        $user = User::firstOrCreate(
            ['phone' => $phoneNumber],
            ['name' => $phoneNumber],
        );

        Auth::login($user);

        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.show-login');
    }
}
