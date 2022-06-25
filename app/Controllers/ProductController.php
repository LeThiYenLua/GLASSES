<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\Controller;

class ProductController extends Controller
{

	public function productChanel()
	{	
		$this->sendPage('products/chanel');
	}
	public function productDior()
	{	
		$this->sendPage('products/dior');
	}
	public function productGucci()
	{	
		$this->sendPage('products/gucci');
	}
	public function productOfTypeChanel()
	{	
		if(isset($_POST['man'])){
			$ma_lsp='L01';

		}else {
			$ma_lsp='L02';
		}

		$this->sendPage('products/chanel',['products'=> Product::where('ma_loai_san_pham',$ma_lsp)->where('ma_thuong_hieu','TH01')->get()]);
	}
	public function productOfTypeDior()
	{	
		if(isset($_POST['man'])){
			$ma_lsp='L01';

		}else {
			$ma_lsp='L02';
		}

		$this->sendPage('products/dior',['products'=> Product::where('ma_loai_san_pham',$ma_lsp)->where('ma_thuong_hieu','TH02')->get()]);
	}
	public function productOfTypeGucci()
	{	
		if(isset($_POST['man'])){
			$ma_lsp='L01';

		}else {
			$ma_lsp='L02';
		}

		$this->sendPage('products/gucci',['products'=> Product::where('ma_loai_san_pham',$ma_lsp)->where('ma_thuong_hieu','TH03')->get()]);
	}
	public function detailProduct()
	{	
		$this->sendPage('products/detail',['product'=> Product::where('ma_san_pham',$_GET['msp'])->first()]);
	}
}
