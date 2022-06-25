<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'sanPham';
    protected $primaryKey = 'ma_san_pham';
    protected $foreignKey = ['ma_loai_san_pham', 'ma_thuong_hieu'];
    protected $typeKey = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'gia_san_pham',
        'mo_ta_san_pham',
        'dung_tich',
        'hinh_anh',
        'ma_loai_san_pham',
        'ma_thuong_hieu'
    ];
}
