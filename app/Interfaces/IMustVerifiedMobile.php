<?php
namespace App\Interfaces;

interface IMustVerifiedMobile{
    public function hasVerifiedMobile();
    public function markMobileAsVerified();
    public function sendMobileVerificationNotification();
}
