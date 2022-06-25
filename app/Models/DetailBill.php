<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailBill extends Model
{
    protected $table = 'chitiethoadon';
    protected $primaryKey = ['ma_hoa_don', 'ma_san_pham'];
    protected $fillable = ['ma_san_pham','ma_hoa_don', 'so_luong_sp'];
    public $timestamps = false; // table có 2 cột update_at & create_at ?
    public $incrementing = false; // primaryKey có tự tăng ?
    protected $keyType = ['int','string'];
}
