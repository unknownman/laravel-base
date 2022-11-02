<?php

namespace App\Services;

use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;

class OtpService
{
    static function isMobileValid($number)
    {
        return !is_null(User::where('mobile_number', $number)->first());
    }

    static function generateOtp($number)
    {
        $user = User::where('mobile_number', $mobile_no)->first();

        # User Does not Have Any Existing OTP
        $verificationCode = Otp::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if ($verificationCode && $now->isBefore($verificationCode->expire_at)) {
            return $verificationCode;
        }


        // Create a New OTP
        return Otp::create([
            'user_id' => $user->id,
            'otp' => rand(103246, 999999),
            'expire_at' => Carbon::now()->addMinutes(1)
        ]);
    }
}
