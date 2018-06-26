@extends('layouts.app')


@section('content')
	<div class="row">
		

		<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">

			<div class="panel panel-default">
				<div class="panel-body">

					@include('common.error')


					<form action="{{ route('users.update', $user->id) }}" method="POST" role="form" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
						<legend>编辑内容</legend>
					
						<div class="form-group">
							<label for="name">用户名</label>
							<input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
						</div>
					
						<div class="form-group">
							<label for="email">电子邮箱</label>
							<input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
						</div>

						<div class="form-group">
							<label for="introduction">个人简介</label>
							<textarea id="introduction" row="3" class="form-control" name="introduction">{{ old('introduction', $user->introduction) }}</textarea>
						</div>

						<div class="form-group">
							<label for="introduction">个人头像</label>
							<input type="file" name="avatar">
						</div>



						
					
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

				</div>
			</div>
			



		</div>


	</div>
@endsection