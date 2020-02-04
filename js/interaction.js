function SetContinent() {
	var continent = $('#Continent').val();
	var goto = "/Continent/"+continent;
	$.ajax({
		url: goto,
		data: {},
		type: 'POST',
		success: function(output) {
			var returnedData = JSON.parse(output);
			$('#outputArea').html(output);
		}			
	});
	
}