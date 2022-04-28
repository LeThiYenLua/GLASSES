<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'taiKhoan';
    protected $fillable = ['email', 'mat_khau'];
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $typeKey = 'string';
    public $timestamps = false;

    public static function validate(array $data) {
        $errors = [];

        if (! $data['email']) {
            $errors['email'] = 'Invalid email.';
        } elseif (Taikhoan::where('email', $data['email'])->count() > 0) {
            $errors['email'] = 'Email already in use.';
        }    

        if (strlen($data['password']) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        } elseif ($data['password'] != $data['password_confirmation']) {
            $errors['password'] = 'Password confirmation does not match.';
        }
        
        return $errors;
    }   
}
