<?php

namespace App\Controllers\Auth;

use App\Models\TaiKhoan;
use App\Controllers\Controller;
use App\Models\DetailCart;
use App\Models\GioHang;
use App\SessionGuard as Guard;

class LoginController extends Controller
{
	public function showLoginForm()
	{
		if (Guard::isUserLoggedIn()) {
			redirect('/home');
		}
		$this->sendPage('auth/login');
	}

	public function login()
	{
		$user_credentials = $this->filterUserCredentials($_POST);
		$errors = [];
		$user = TaiKhoan::where('email', $user_credentials['email'])->first();
		if (!$user) {
			// Người dùng không tồn tại...
			$errors['email'] = 'Không Tồn Tại Email Này @@';
		} else if (Guard::login($user, $user_credentials)) {
			$magh = GioHang::join('nguoiDung','nguoiDung.ma_nguoi_dung','=','gioHang.ma_nguoi_dung')->where('email',Guard::user()->email)->first()->ma_gio_hang;
		$cart = DetailCart::join('sanPham','sanPham.ma_san_pham','=','chitietgiohang.ma_san_pham')->where('ma_gio_hang',$magh)->first();
		if(isset($cart))
			$_SESSION['cart'][]= $cart;
			if($user_credentials['email'] == 'admin@gmail.com'){
				redirect('/admin');
			}
			// Đăng nhập thành công...
			else{redirect('/home');}
		} 
		else {
			// Sai mật khẩu...
			$errors['password'] = 'Sai Mật Khẩu @@';
		}
		$this->sendPage('/auth/login', ['errors' => $errors]);
	}

	public function logout()
	{
		Guard::logout();
		redirect('/login');
	}

	protected function filterUserCredentials(array $data)
	{
		return [
			'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
			'password' => $data['password'] ?? null
		];
	}
}
