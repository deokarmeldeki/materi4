

<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('Apakah Anda Yakin?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger ml-1"><i class="fa fa-trash"></i></button>
	</form>									