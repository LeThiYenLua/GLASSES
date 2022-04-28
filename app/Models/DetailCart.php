<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailCart extends Model
{
    protected $table = 'chitietGioHang';
    protected $primaryKey = ['ma_gio_hang', 'ma_san_pham'];
    protected $fillable = ['ma_san_pham', 'ma_gio_hang', 'so_luong_san_pham'];
    public $timestamps = false; // table có 2 cột update_at & create_at ?
    public $incrementing = false; // primaryKey có tự tăng ?
    protected $keyType = ['int','string'];
}
