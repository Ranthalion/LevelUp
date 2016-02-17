$(document).ready(function(){
	
	$('#category-form').find('select').change(function(){
		$('#category-form').submit();
	});

	$('#search-form').submit(function(){
		var url = $(this).attr('action');
		$.post(url, $( "#search-form" ).serialize(), function(data){
			$('#skill-list').html(data);
		} );
		return false;

	});
});