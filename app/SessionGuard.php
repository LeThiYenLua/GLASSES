<?php

namespace App;

use App\Models\TaiKhoan;

class SessionGuard
{
    protected static $user;

    public static function login(TaiKhoan $user, array $credentials)
    {   
        $verified = password_verify($user->mat_khau,password_hash($credentials['password'],PASSWORD_DEFAULT) );
        // var_dump($verified);exit();
        if ($verified) {
            $_SESSION['user_id'] = $user->email;
        }
        return $verified;
    }

    public static function user()
    {
        if (! static::$user && static::isUserLoggedIn()) {
            static::$user = TaiKhoan::find($_SESSION['user_id']);
        }
        return static::$user;
    }

    public static function logout()
    {
        static::$user = null;
        session_unset();
        session_destroy();
    }

    public static function isUserLoggedIn()
    {
        return isset($_SESSION['user_id']);    
    }
}
