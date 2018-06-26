@extends('layouts.app')


@section('content')
	
	<div class="row">
		
		<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
			

			<div class="panel panel-default">
				<div class="panel-body">
					
					<img src="{{ $user->avatar }}" class="img-responsive" alt="Image">

					<hr>

					<h4><strong>个人简介</strong></h4>

					<p>{{ $user->introduction }}</p>

					<hr>

					<h4><strong>注册于</strong></h4>

					<p>{{ $user->created_at->diffForHumans() }}</p>

				</div>
			</div>
		</div>

		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			
			<div class="panel panel-default">
				<div class="panel-body">
					Basic panel example
				</div>
			</div>

			<hr>

			<div class="panel panel-default">
				<div class="panel-body">
					Basic panel example
				</div>
			</div>



		</div>


	</div>


@endsection