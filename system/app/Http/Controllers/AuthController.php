<?php 
	namespace App\Http\Controllers;
	use Auth;
class AuthController extends Controller{
	
	function showLogin(){
		return view('login');
	}
	function loginProcess(){
			if (Auth::attempt(['email' => request ('email'), 'password' => request ('password')])){
				return redirect('beranda')->with('succes','Login Berhasil !');
			}else {
				return back()->with('danger','Login Gagal !, Silakan cek email dan password');
			}
	}
	function logout(){
		Auth::logout();
		return redirect('beranda');
	}
	function showRegister(){
		return view('register');
	}
}