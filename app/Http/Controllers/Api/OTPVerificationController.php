<?php

namespace App\Http\Controllers\Api;

use App\Utility\SmsUtility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OTPVerificationController extends Controller
{
    /**
     * @param  User $user
     * @return void
     */

    public function send_code($user)
    {
        SmsUtility::phone_number_verification($user);
    }
}
