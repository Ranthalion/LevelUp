<div class="row">
@foreach ($skills as $skill)
	<div class="col-md-3 mb10 bottom-border">				
		<span class="skill-tag">{{ $skill->name }}</span> <span style="font-size: small;">x 0</span><br/>
		{{ $skill->description}}<br/>
		<span style="font-weight:bold; font-size: small">0 recent swaps</span>
	</div>                        
@endforeach
</div>
