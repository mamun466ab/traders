<?php

namespace App\Http\WbdHelpers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthCheck {

    public static function logedIn() {
        $usrId = Session::get('userId');
        if ($usrId != NULL) :
            if(Session::get('usrInfo')->usr_sts != 1):
                Session::put('errMsg', 'Your account not active. Please chech your email address for activate your account.');
                return Redirect::to('/login');
            else:
                return Redirect::to('/')->send();
            endif;
        endif;
    }

    public static function logedOut() {
        $usrId = Session::get('userId');
        if ($usrId == NULL || Session::get('usrInfo')->usr_sts != 1) :
            return Redirect::to('/login')->send();
        endif;
    }
    
    public static function pjSessCheck() {
        $pjSess = Session::get('pjnm');
        if ($pjSess == NULL) :
            return Redirect::to('/')->send()->with('pjError', 'Please select project.');
        endif;
    }

}
