function SetContinent() {
	var continent = $('#Continent').val();
	var goto = "/Continent/"+continent;
	$.ajax({
		url: goto,
		data: {},
		type: 'POST',
		success: function(output) {
			alert(output);
			$('#outputArea').html(output);			
		}			
	});
}