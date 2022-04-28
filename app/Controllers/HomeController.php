<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\Controller;

class HomeController extends Controller
{

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
