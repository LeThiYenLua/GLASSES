<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\HoaDon;
use App\Models\NguoiDung;
use App\Models\Product;
use PDO;
use PDOException;

class AdminController extends Controller
{

	public function index()
	{
		$this->sendPage('admin/admin');
	}
	public function qldh()
	{
		$this->sendPage('admin/qldh',['bill'=>HoaDon::all()]);
	}
	public function qlkh()
	{
		$this->sendPage('admin/qlkh',['client'=>NguoiDung::all()]);
	}
	public function qlsp()
	{
		$this->sendPage('admin/qlsp',['sanpham'=>Product::all()]);
	}
	public function add()
	{
		$error = '';
		try{
			Product::create([
			'ma_san_pham'=>$_POST['idsp'],
			'ten_san_pham'=>$_POST['name'],
			'gia_san_pham'=>$_POST['price'],
			'ma_loai_san_pham'=>$_POST['type'],
			'hinh_anh'=>$_POST['img'],
			'ma_thuong_hieu'=>$_POST['brand'],
			'mo_ta_san_pham'=>$_POST['mota'],
			'dung_tich'=>$_POST['dungtich']
		]);
		}catch(PDOException $e){
			$error = 'Sản Phẩm Đã Tồn Tại @@';
		}
		
		$this->sendPage('admin/qlsp',['sanpham'=>Product::all(),"error"=>$error]);
	}
	public function delPro(){
		Product::where('ma_san_pham',$_GET['masp'])->delete();
		redirect('/qlsp');
	}
	public function edit(){
		$this->sendPage('admin/qlsp',['sanpham'=>Product::all(),'detail'=>Product::where('ma_san_pham',$_GET['masp'])->first()]);
	}
	public function filter(){
		$product=[];
		if(isset($_GET['malsp'])){
			$product = Product::where('ma_loai_san_pham',$_GET['malsp'])->get();
		}
		elseif(isset($_GET['math'])){
			$product = Product::where('ma_thuong_hieu',$_GET['math'])->get();
		}
		$this->sendPage('admin/qlsp',['sanpham'=>$product]);

	}
	public function update(){
		Product::where('ma_san_pham',$_POST['idsp'])->update(["ten_san_pham" => $_POST['name'], 
															"gia_san_pham" => $_POST['price'], 
															"dung_tich" => $_POST['dungtich']]);
		redirect('/qlsp');
	}
	public function update_status(){
		HoaDon::where('ma_hoa_don',$_GET['mhd'])->update(["trang_thai_giao_hang"=>"Đang chuẩn bị hàng"]);
		redirect('/qldh');
	}
	
	
	
}
