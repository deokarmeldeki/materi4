@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data Produk
						<a href="{{url('produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th width="150px">Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Berat</th>
								<th>Stok</th>
								<th>Deskripsi</th>
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('produk', $produk->id)}}" class="btn btn-dark ml-1" width="20px"><i class="fa fa-info"></i></a>
											<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning ml-1"><i class="fa fa-edit"width="20px"></i></a>
											@include ('template.utils.delete', ['url' => url('produk', $produk->id)])
										</div>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->berat}}</td>
									<td>{{$produk->stok}}</td>
									<td>{{$produk->deskripsi}}</td>
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection