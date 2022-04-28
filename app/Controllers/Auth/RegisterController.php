<?php

namespace App\Controllers\Auth;

use App\Models\TaiKhoan;
use App\Models\NguoiDung;
use App\Models\GioHang;
use App\Controllers\Controller;
use App\SessionGuard as Guard;

class RegisterController extends Controller
{
	public function __construct()
	{
		if (Guard::isUserLoggedIn()) {
			redirect('/home');
		}
		parent::__construct();
	}

	public function showRegisterForm()
	{
		$this->sendPage('auth/register');
	}

	public function register()
	{

		$data = $this->filterUserData($_POST);
		$model_errors = TaiKhoan::validate($data);
		if (empty($model_errors)) {
			// Dữ liệu hợp lệ...
			$this->createUser($data);
		}

		// Dữ liệu không hợp lệ...
		$this->sendPage('auth/register', ['errors' => $model_errors]);
	}

	protected function filterUserData(array $data)
	{
		return [
			'name' => $data['username'] ?? null,
			'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
			'password' => $data['pwd'] ?? null,
			'password_confirmation' => $data['cpwd'] ?? null,
			'phone' => $data['phone'] ?? null
		];
	}

	protected function createUser($data)
	{
		TaiKhoan::create([
			'email' => $data['email'],
			'mat_khau' => $data['password']
		]);
		$user=NguoiDung::create([
			'ten_nguoi_dung' => $data['name'],
			'so_dien_thoai' => $data['phone'],
			'email' => $data['email']
		]);
		GioHang::create([
			'ma_nguoi_dung'=>$user->ma_nguoi_dung
		]);
		redirect('/login');
	}
}
