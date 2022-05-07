<?php

namespace App\Http\Controllers\Wholesaler;

use App\Http\Controllers\Controller;
use App\Models\SmsVerification;
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

        $phoneNumber = phone($request->input('phone'))->formatE164();

        $user = User::firstOrCreate(
            ['phone' => $phoneNumber],
            ['name' => $phoneNumber],
        );

        /** @var SmsVerification $verificationCode */
        $verificationCode = SmsVerification::where([
            'phone'=>$phoneNumber,
            'verification_code' => $request->input('sms_verification_code'),
        ])->first();

        if ($verificationCode) {
            Auth::login($user);

            $verificationCode->delete();

            return redirect()->route('dashboard.index');
        }

        return redirect()->back()->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.show-login');
    }
}
