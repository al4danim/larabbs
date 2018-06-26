@if (count($errors) > 0)
	

	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>有错误</strong>
		<br>
		@foreach ($errors->all() as $error)
			{{ $error }}
		@endforeach
	</div>



@endif