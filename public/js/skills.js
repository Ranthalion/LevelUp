$(document).ready(function(){
	$('#category-form').find('select').change(function(){
		$('#category-form').submit();

	});
});