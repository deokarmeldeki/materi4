@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data User
						<form action="{{url('admin/user')}}" method="post">
							@csrf
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="row no-gutters">
					<div class="col-md-5">
						<div class="form-group">
						<label class="control-label" for="">Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					</div>
					<div class="col-md-3 ml-1">
						<div class="form-group">
							<label class="control-label" for="">Nama</label>
							<input type="text" name="nama" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Password</label>
							<input type="password" name="password" class="form-control">
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