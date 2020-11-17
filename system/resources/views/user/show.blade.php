@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data User
					</div>
					<div class="card-body">
						<h4>{{"@".$user->username}}</h4><hr>
						<p>Email : {{$user->email}} |
							Nama : {{$user->nama}} |
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection