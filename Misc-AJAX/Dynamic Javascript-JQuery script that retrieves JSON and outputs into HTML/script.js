// on keyup on the element with id of search perform the function
$('#search').keyup(function() {
	// save the value of the item with id of search into the searchField variable
	var searchField = $('#search').val();
	// save a regular expression object with whatever is the value in the search field and make it case insensitive
	var myExp = new RegExp(searchField, "i");
	// get the JSON from the data.json file and pass it to a function
	$.getJSON('data.json', function(data) {
		var output = '<ul class="searchresults">';
		// iterate through the JSON object 'data', for each JSON' object's subelement name and bio search for a match
		// with whatever was put in the searchfield, if there are results output what's in the output variable script
		$.each(data, function(key, val) {
			if ((val.name.search(myExp) != -1) ||
			(val.bio.search(myExp) != -1)) {
				output += '<li>';
				output += '<h2>'+ val.name +'</h2>';
				output += '<img src="images/'+ val.shortname +'_tn.jpg" alt="'+ val.name +'" />';
				output += '<p>'+ val.bio +'</p>';
				output += '</li>';
			}
		});
		output += '</ul>';
		// write the output into the contents of the element with id of update
		$('#update').html(output);
	}); //get JSON
});
