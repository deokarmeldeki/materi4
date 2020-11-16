@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header text-bold">
						Detail Data Produk
					</div>
					<div class="card-body">

							<h4>{{$produk->nama}}</h4><hr>
						<table class="table table-bordered">
							<th>Berat {{number_format($produk->harga)}} Kg |
							Rp : {{$produk->berat}}  |
							Stok : {{$produk->stok}} unit</th>
						</table><br>
							<p>{!! nl2br($produk->deskripsi) !!}</p>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection