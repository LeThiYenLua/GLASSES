<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    protected $table = 'nguoiDung';
    protected $primaryKey = 'ma_nguoi_dung';
    protected $fillable = [
        'ma_nguoi_dung',
        'ten_nguoi_dung',
        'so_dien_thoai',
        'email'
    ];
    protected $foreignKey = 'email';
    public $timestamps = false;
}
