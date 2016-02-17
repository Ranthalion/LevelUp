@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h3>Skills</h3>
		
		<form id='category-form' method="POST" action="{{ action('SkillController@changeCategory') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="pull-right">
				Category {!! Form::select('category', $categories, $category) !!}
			</div>
		</form>
		
		{{ Form::open(array('id'=>'search-form', 'method'=>'POST')) }}
		{{ csrf_field() }}
		<div class="pull-left">
			Search <input type="text" name="searchString" id="searchString"/>
		</div>
		{{ Form::close() }}
		<div class="clearfix mb20"></div>

		<div id='skill-list'>
		@include('partials.skills')
		</div>
	</div>
@endsection

@section('scripts')

	{{ Html::script('js/skills.js') }}

@endsection