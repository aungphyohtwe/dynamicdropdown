
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<form>
		<label for="cars"> Service:</label>
	   	<select id="service" name="service"> 
		 	<option value="">--Select--</option> 
			<option value="1">Samsung</option> 
			<option value="2">HTC</option> 
		</select><br><br>

		<label for="cars"> Access:</label>
		<select id="access" name="access"> 
			<option value="">--Select--</option> 
			<option value="1">-</option> 
			<option value="2">HTC1</option> 
			<option value="2">HTC2</option> 
			<option value="2">HTC3</option>
		</select><br><br>
	</form>

</body>
</html>


<script>
$(document).ready(function(){
	var $service = $( '#service' ),
	$access = $( '#access' ),
	$options = $access.find( 'option' );
    
	$service.on( 'change', function() {
		$access.html( $options.filter( '[value="' + this.value + '"]' ) );
	} ).trigger( 'change' );
});
</script>

