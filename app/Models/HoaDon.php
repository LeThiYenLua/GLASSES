<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoaDon';
    protected $primaryKey = 'ma_hoa_don';
    protected $fillable = ['ma_hoa_don', 
                        'ngay_lap_hoa_don', 
                        'tong_tien', 
                        'hinh_thuc_thanh_toan', 
                        'ma_nguoi_dung', 
                        'dia_chi',
                        'trang_thai_thanh_toan',
                        'trang_thai_giao_hang'];
    public $timestamps = false; // table có 2 cột update_at & create_at ?
}