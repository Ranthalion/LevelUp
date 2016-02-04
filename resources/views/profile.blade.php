@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Profile
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')
					Here is the profile

				</div>
			</div>

		</div>
	</div>
@endsection