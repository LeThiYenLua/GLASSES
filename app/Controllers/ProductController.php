<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\Controller;

class ProductController extends Controller
{

	public function product()
	{	
		$this->sendPage('products/product');
	}
	public function productOfType()
	{	
		if(isset($_POST['man'])){
			$ma_lsp='L01';
		}else $ma_lsp='L02';

		$this->sendPage('products/product',['products'=> Product::where('ma_loai_san_pham',$ma_lsp)->get()]);
	}
	public function detailProduct()
	{	
		$this->sendPage('products/detail',['product'=> Product::where('ma_san_pham',$_GET['masp'])->first()]);
	}
}
