@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data User
						<form action="{{url('admin/user', $user->id)}}" method="post">
							@csrf
							@method('PUT')
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Username</label>
						<input type="text" name="username" class="form-control" value="{{$user->nama}}">
					</div>
					<div class="row no-gutters">
					<div class="col-md-6">
						<div class="form-group">
						<label class="control-label" for="">Email</label>
						<input type="text" name="email" class="form-control" value="{{$user->email}}">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$user->nama}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Password</label>
							<input type="text" name="password" class="form-control" value="{{$user->password}}">
						</div>
					</div>
				</div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection