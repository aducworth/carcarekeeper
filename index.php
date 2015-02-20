<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<select id='make'>
	<option>Choose Make</option>
</select>

<select id='model'>
	<option>Choose Year</option>
</select>

<select id='year'>
	<option>Choose Year</option>
</select>

<div id='service-plan'></div>

<script>

$(document).ready(function(){

	$.ajax({
	  url: '/_get_makes.php',
	}).done(function(data) {
	   $('#make').html( data );
	});
	
	$('#make').change(function(){
		
		var postData = '&make=' + $('#make').val();
		
		$.ajax({
		  url: '/_get_models.php',
		  data: postData,
		  type: "POST"
		}).done(function(data) {
		  $('#model').html( data );
		});
		
	});
	
	$('#model').change(function(){
		
		var postData = '&make=' + $('#make').val() + '&model=' + $('#model').val();
		
		$.ajax({
		  url: '/_get_years.php',
		  data: postData,
		  type: "POST"
		}).done(function(data) {
		  $('#year').html( data );
		});
		
	});
	
	$('#year').change(function(){
	
		var postData = '&modelyear=' + $(this).val();
		
		$.ajax({
		  url: '/_get_service_plan.php',
		  data: postData,
		  type: "POST"
		}).done(function(data) {
		  $('#service-plan').html( data );
		});
	});
	
	
});

</script>

