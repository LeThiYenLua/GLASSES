<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\HoaDon;
use App\Models\NguoiDung;
use App\Models\Product;

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
	
	
	
}
