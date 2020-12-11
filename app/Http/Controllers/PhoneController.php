<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class PhoneController extends Controller
{
    public function setVerificationCode($mobile)
    {
        $code = rand(1000, 9999);
        Log::info("$mobile:$code");
        Cache::put($mobile,$code,60);
        return response('verify your code !');
    }

    public function verifyMobile($mobile,$code)
    {
        $cachedCode=Cache::get($mobile);
        if(empty($code) || $cachedCode==null ||$cachedCode!=$code){
            return response("Try again !");
        }

        Cache::forget($mobile);
        return response('ok ');
    }
}
