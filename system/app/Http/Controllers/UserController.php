<?php 

	namespace App\Http\Controllers;
	use App\User;

	class UserController extends controller{
	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(){
		$user= new User;
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> nama = request('nama');
		$user-> password = bcrypt(request('password'));
		$user-> remember_token = request('remember_token');
		$user->save();

		return redirect('user')->with ('success', 'Data Berhasil Ditambahkan');
	}
	function show(User $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data)->with ('success', 'Data Berhasil di edit');
	}
	function update(User $user){
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> nama = request('nama');
		$user-> password = bcrypt(request('password'));
		$user-> remember_token = request('remember_token');
		$user->save();

		return redirect('user')->with ('success', 'Data Berhasil di update');
	}
	function destroy(User $user){
		$user->delete();

		return redirect('user')->with ('success', 'Data Berhasil dihapus');

		
	}
}