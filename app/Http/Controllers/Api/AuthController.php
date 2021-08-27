<?php

namespace App\Http\Controllers\APi;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BusinessSetting;
use App\Http\Controllers\Api\OTPVerificationController;
use App\Notifications\AppEmailVerificationNotification;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        /* check user already exists or not  */
        if (User::where('email', $request->email_or_phone)->orWhere('phone', $request->email_or_phone)->first() != null) {
            return response()->json([
                'result' => false,
                'message' => 'User already exists.',
                'user_id' => 0
            ], 201);
        }

        /* user register_by email  */
        if ($request->register_by == 'email') {
            $user = new User([
                'name' => $request->name,
                'email' => $request->email_or_phone,
                'password' => bcrypt($request->password),
                'verification_code' => rand(100000, 999999)
            ]);
        } else {
            /* user register_by phone  */
            $user = new User([
                'name' => $request->name,
                'phone' => $request->email_or_phone,
                'password' => bcrypt($request->password),
                'verification_code' => rand(100000, 999999)
            ]);
        }

        /* check email_verification */

        if ($request->register_by == 'email') {
            if (BusinessSetting::where('type', 'email_verification')->first()->value != 1) {
                $user->email_verified_at = date('Y-m-d H:m:s');
            } else {
                /* send to email one time password */
                $user->notify(new AppEmailVerificationNotification());
            }
        } else {
            /* send to phone one time password */
            $otpController = new OTPVerificationController();
            $otpController->send_code($user);
        }

        $user->save();

        return response()->json([
            'result' => true,
            'message' => 'Registration Successful. Please verify and log in to your account.',
            'user_id' => $user->id
        ], 201);
    }

    public function resendCode(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $user->verification_code = rand(100000, 999999);

        if ($request->verify_by == 'email') {
            $user->notify(new AppEmailVerificationNotification());
        } else {
            $otpController = new OTPVerificationController();
            $otpController->send_code($user);
        }

        $user->save();

        return response()->json([
            'result' => true,
            'message' => 'Verification code is sent again',
        ], 200);
    }

    public function confirmCode(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();

        if ($user->verification_code == $request->verification_code) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->verification_code = null;
            $user->save();
            return response()->json([
                'result' => true,
                'message' => 'Your account is now verified.Please login',
            ], 200);
        } else {
            return response()->json([
                'result' => false,
                'message' => 'Code does not match, you can request for resending the code',
            ], 200);
        }
    }
}
