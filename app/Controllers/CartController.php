<?php

namespace App\Controllers;

use App\Models\GioHang;
use App\Controllers\Controller;
use App\Models\DetailCart;
use App\Models\DetailBill;
use App\Models\HoaDon;
use App\SessionGuard as Guard;
use Illuminate\Support\Facades\Date;
use PDOException;

class CartController extends Controller
{

	public function cart()
	{	
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}
		$magh = GioHang::join('nguoiDung','nguoiDung.ma_nguoi_dung','=','gioHang.ma_nguoi_dung')->where('email',Guard::user()->email)->first()->ma_gio_hang;
		$this->sendPage('cart/cart',['carts'=>DetailCart::join('sanPham','sanPham.ma_san_pham','=','chitietgiohang.ma_san_pham')->where('ma_gio_hang',$magh)->get()]);
	}

	public function addCart()
	{	
		$magh = GioHang::join('nguoiDung','nguoiDung.ma_nguoi_dung','=','gioHang.ma_nguoi_dung')->where('email',Guard::user()->email)->first()->ma_gio_hang;
		try{
			DetailCart::create([
			'ma_san_pham'=>$_POST['masp'],
			'ma_gio_hang'=>$magh,
			'so_luong_san_pham'=>$_POST['so-luong']
		]);
		}catch(PDOException $pe){
			$soluong=DetailCart::where('ma_san_pham',$_POST['masp'])->where('ma_gio_hang',$magh)->first()->so_luong_san_pham;
			DetailCart::where('ma_san_pham',$_POST['masp'])->where('ma_gio_hang',$magh)->update([
				'so_luong_san_pham'=>($soluong+$_POST['so-luong'])
			]);
		}
		
		redirect('/cart');
	}
	public function delCart(){
		$giohang=GioHang::join('nguoiDung','nguoiDung.ma_nguoi_dung','=','gioHang.ma_nguoi_dung')->where('email',Guard::user()->email)->first();
		DetailCart::where('ma_san_pham',$_GET['masp'])->where('ma_gio_hang',$giohang->ma_gio_hang)->delete();
		redirect('/cart');
	}

	public function pay(){
		$giohang=GioHang::join('nguoiDung','nguoiDung.ma_nguoi_dung','=','gioHang.ma_nguoi_dung')->where('email',Guard::user()->email)->first();
		$hoadon=HoaDon::create([
			'ngay_lap_hoa_don' => Date::now(7),
			'tong_tien' => $_POST['tong-tien'],
			'hinh_thuc_thanh_toan'=>'Thanh toán khi nhận hàng',
			'ma_nguoi_dung'=> $giohang->ma_nguoi_dung,
			'dia_chi'=>$_POST['address'],
			'trang_thai_thanh_toan'=>'Chưa thanh toán',
			'trang_thai_giao_hang'=>'Đang chờ xác nhận'
		]);
		foreach(DetailCart::where('ma_gio_hang',$giohang->ma_gio_hang)->get() as $cart){
			DetailBill::create([
				'ma_hoa_don'=>$hoadon->ma_hoa_don,
				'ma_san_pham'=>$cart->ma_san_pham,
				'so_luong_sp'=>$cart->so_luong_san_pham
			]);
			
			DetailCart::where('ma_san_pham',$cart->ma_san_pham)->where('ma_gio_hang',$cart->ma_gio_hang)->delete();
		}
		redirect('/cart');
	}

	public function memory(){
		$this->sendPage('cart/memory',['memo'=>HoaDon::all()]);
	}
	public function detailbill(){
		$this->sendPage('cart/infobill',['info'=>DetailBill::join('sanPham','sanPham.ma_san_pham','=','chitiethoadon.ma_san_pham')
		->join('hoadon','hoadon.ma_hoa_don','=','chitiethoadon.ma_hoa_don')
		->join('loaisanpham','loaisanpham.ma_loai_san_pham','=','sanpham.ma_loai_san_pham')
		->where('hoadon.ma_hoa_don',$_GET['mdh'])->get()]);
	}
	
}
