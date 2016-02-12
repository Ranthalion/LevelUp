@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h3>Skills</h3>
		
		<form id='category-form' method="POST" action="{{ action('SkillController@category') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="pull-right">
				Category {!! Form::select('category', $categories, $category) !!}
			</div>
		</form>
		<div class="pull-left">
			Search <input type="text" />
		</div>
		
		<div class="clearfix mb20"></div>

		<div class="row">
		@foreach ($skills as $skill)
			<div class="col-md-3 mb10 bottom-border">				
				<span class="skill-tag">{{ $skill->name }}</span> <span style="font-size: small;">x 0</span><br/>
				{{ $skill->description}}<br/>
				<span style="font-weight:bold; font-size: small">0 recent swaps</span>
			</div>                        
        @endforeach
	</div>
@endsection

@section('scripts')

	{{ Html::script('js/skills.js') }}

@endsection