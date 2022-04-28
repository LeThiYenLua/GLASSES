<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = 'gioHang';
    protected $primaryKey = 'ma_gio_hang';
    protected $foreignKey = 'ma_nguoi_dung';
    protected $fillable = ['ma_nguoi_dung', 'ma_gio_hang'];
    public $timestamps = false;

}
