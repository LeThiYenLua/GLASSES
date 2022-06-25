<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\Controller;
use App\Models\DetailCart;
use App\Models\GioHang;
use App\SessionGuard as Guard;

class HomeController extends Controller
{
	// public function __construct()
	// {
	// 	$magh = GioHang::join('nguoiDung','nguoiDung.ma_nguoi_dung','=','gioHang.ma_nguoi_dung')->where('email',Guard::user()->email)->first()->ma_gio_hang;
	// 	$cart = DetailCart::join('sanPham','sanPham.ma_san_pham','=','chitietgiohang.ma_san_pham')->where('ma_gio_hang',$magh)->first();
	// 	if(isset($cart))
	// 		$_SESSION['cart'][]= $cart;
	// }
	public function index()
	{
		$this->sendPage('home');
	}
	public function about()
	{
		$this->sendPage('about/about');
	}
	public function search()
	{
		if(isset($_POST['search']) && $_POST['search'] != ''){
			$this->sendPage('layouts/search',['result'=>Product::where('ten_san_pham','like', '%'. $_POST['search'] . '%')->get()]);
		}else {
			redirect('/home');
		}
	}
	
	
}
